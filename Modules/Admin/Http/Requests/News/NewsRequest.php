<?php

namespace Modules\Admin\Http\Requests\News;


use App\Abstracts\FormRequest;

class NewsRequest extends FormRequest
{

    public function rules()
    {
        return [
            'bangla_title' => 'required',
            'english_title' => 'required',
            'featured_image_link' => 'required',
            'bangla_detail' => 'required',
            'english_detail' => 'required',
            'published_date' => 'required',
        ];
    }


}
