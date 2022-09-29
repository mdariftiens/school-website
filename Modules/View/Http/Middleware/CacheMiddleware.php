<?php

namespace Modules\View\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        if (!session()->has('lang'))
        {
            session(['lang'=>'bn']);
            session()->save();
        }

        app()->setLocale(session()->get('lang'));

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
