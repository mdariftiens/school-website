<?php

namespace Modules\Admin\Http\Requests;


use App\Abstracts\FormRequest;

class NoticeCategoryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'
        ];
    }


}
