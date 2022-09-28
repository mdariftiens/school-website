<?php

namespace Modules\Admin\Http\Controllers\Cache;

use App\Services\CacheService;
use Illuminate\Routing\Controller;

class CacheController extends Controller
{
    public $cacheService;

    public function __construct(CacheService $cacheService)
    {
        $this->cacheService = $cacheService;
    }


    function clear(){

        $this->cacheService->clear();

        return back();
    }
}
