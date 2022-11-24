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
            'bangla_description' => 'required',
            'english_description' => 'required',
            'status' => 'required',
            'type' => 'required',
            'visibility' => 'required', 
            'slug' => 'required|unique:posts,slug,'.$this->post,           
        ];
    }


}
