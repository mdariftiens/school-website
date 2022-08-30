<?php

namespace App\Abstracts;

use Illuminate\Http\Request;

abstract class Repository
{
    public function getPerPage()
    {
        if (request()->has('per_page')){
            return request()->per_page;
        }
        return 10;
    }

}
