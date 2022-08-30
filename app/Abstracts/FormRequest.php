<?php

namespace App\Abstracts;

use Illuminate\Foundation\Http\FormRequest as Req;

abstract class FormRequest extends Req
{

    public function authorize()
    {
        return true;
    }
}
