<?php

namespace Modules\View\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CacheMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $cacheService = new \App\Services\CacheService();

        $key = generateCacheKey();

        if($cacheService->has($key))
        {
            echo $cacheService->get($key);
            die();
        }

        return $next($request);
    }
}
