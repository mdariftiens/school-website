<?php

namespace Modules\Frontend\Services;


use Illuminate\Support\Facades\Cache;
use Psr\SimpleCache\CacheInterface;

class CacheService implements CacheInterface
{
    /**
     * @var int
     */
    private $ttl = null;

    /**
     * @var bool
     */
    private $cacheEnable = false;

    public function __construct()
    {
        $ttl = env("CACHE_TTL");
        $this->cacheEnable = (bool)env("CACHE_ENABLE");

        if (!$ttl) {
            throw new \Exception("CACHE_TTL not found in .env");
        }

        if (is_numeric((int)$this->ttl)) {
            throw new \Exception("CACHE_TTL not int value");
        }

        $this->ttl = env("CACHE_TTL");
    }

    public function getTTL()
    {
        return $this->ttl;
    }

    private function isCacheDisable(): bool
    {
        return $this->cacheEnable === false;
    }

    public function get($key, $default = null):mixed
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        return Cache::get($key, $default);
    }

    public function set($key, $value, $ttl = null):bool
    {
        if ($this->isCacheDisable()) {
            return false;
        }
        $ttl = $ttl ?? $this->getTTL();
        Cache::add($key, $value, $ttl);
        return true;
    }

    public function update($key, $value, $ttl = null)
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        $ttl = $ttl ?? $this->getTTL();

        if ($this->has($key)) {
            Cache::put($key, $value,$ttl);
            return true;
        }
        return false;
    }

    public function delete($key):bool
    {
        if ($this->isCacheDisable()) {
            return false;
        }
        if ($this->has($key)) {
            Cache::forget($key);
            return true;
        }
        return false;
    }

    public function clear():bool
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        Cache::flush();
        return true;
    }

    public function getMultiple($keys, $default = null):iterable
    {
        $values = [];
        foreach ($keys as $key) {
            $values[$key] = $this->get($key, $default);
        }

        return (array)$values;
    }

    /**
     * @param  $keyValueAssocArray
     * @param  null  $ttl
     */
    public function setMultiple($keyValueAssocArray, $ttl = null):bool
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        foreach ($keyValueAssocArray as $key => $value) {
            $this->set($key, $value, $ttl ?? $this->getTTL());
        }
        return true;
    }

    public function deleteMultiple($keys):bool
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        foreach ($keys as $key) {
            if ($this->has($key)) {
                $this->delete($key);
            }
        }
        return true;
    }

    public function has($key):bool
    {
        return Cache::has($key);
    }

}
