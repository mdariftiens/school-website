<?php

namespace App\Services;

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

        $ttl = getThemeSettingValue('_theme_setting_ttl');

        if (request()->hasAny(['_theme_setting_ttl','_theme_setting_is_enable'])){
            $ttl = 3600;
        }

        $this->cacheEnable = getThemeSettingValue('_theme_setting_is_enable') == 'yes';

        if (!$ttl) {
            throw new \Exception("_theme_setting_ttl not found in theme config");
        }

        if (!is_numeric((int)$this->ttl)) {
            throw new \Exception("_theme_setting_ttl must in int");
        }

        $this->ttl = $ttl;
    }

    public function getTTL()
    {
        return $this->ttl;
    }

    private function isCacheDisable(): bool
    {
        return $this->cacheEnable === false;
    }

    public function get($key, $default = null)
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        return Cache::get($key, $default);
    }

    public function set($key, $value, $ttl = null)
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

        if ($this->has()) {
            Cache::put($key, $value,$ttl);
            return true;
        }
        return false;
    }

    public function delete($key)
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

    public function clear()
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        Cache::flush();
        return true;
    }

    public function getMultiple($keys, $default = null)
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        $values = [];
        foreach ($keys as $key) {
            $values[$key] = $this->get($key, $default);
        }

        return $values;
    }

    /**
     * @param  $keyValueAssocArray
     * @param  null  $ttl
     */
    public function setMultiple($keyValueAssocArray, $ttl = null)
    {
        if ($this->isCacheDisable()) {
            return false;
        }

        foreach ($keyValueAssocArray as $key => $value) {
            $this->set($key, $value, $ttl ?? $this->getTTL());
        }
        return true;
    }

    public function deleteMultiple($keys)
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

    public function has($key)
    {
        if ($this->isCacheDisable()) {
            return false;
        }
        return Cache::has($key);
    }

}
