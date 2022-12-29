<?php

namespace Modules\Admin\Http\Requests\Blog;

use App\Abstracts\FormRequest;

class PostRequest extends FormRequest
{

    public function rules()
    {
      
        return [
            'bangla_title' => 'required',
            'english_title' => 'required',
            'bangla_description' => 'nullable',
            'english_description' => 'nullable',
            'status' => 'required',
            'type' => 'required',
            'visibility' => 'required', 
            'comment' => 'required', 
            'category' => 'required', 
        ];
    }


}
