<?php

namespace Modules\Frontend\Services;


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class Response
{

    public static function toJson($data, $status = 200)
    {
        if ($data instanceof LengthAwarePaginator) {
            return response()->json($data);
        }

        $responseData = [];
        $responseData['data'] = $data;
        return response()->json($responseData, $status);
    }

    public static function toHtml($data, $view = '')
    {
        if ($view) {
            return view($view, $data);
        }
        return self::toJson($data);
    }

    public static function toResponse($data, $view = null, $status = 200)
    {
        if (Str::contains(request()->url(), '/api') || request()->ajax() || request()->expectsJson()) {
            return self::toJson($data, $status);
        }
        return self::toHtml($data, $view);
    }
}
