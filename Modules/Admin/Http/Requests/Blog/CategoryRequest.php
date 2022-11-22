<?php

namespace Modules\Admin\Http\Requests\Blog;


use App\Abstracts\FormRequest;

class CategoryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'bangla_title' => 'required',
            'english_title' => 'required',
            'bangla_detail' => 'required',
            'english_detail' => 'required',
        ];
    }


}
