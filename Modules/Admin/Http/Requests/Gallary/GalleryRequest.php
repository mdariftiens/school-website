<?php

namespace Modules\Admin\Http\Requests\Gallary;


use App\Abstracts\FormRequest;

class GalleryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_title' => 'required',
            'bangla_title' => 'required',
            'gallery_type' => 'required',
            'english_description' => 'nullable',
            'bangla_description' => 'nullable',
            'is_publish' => 'required',
            'priority' => 'nullable',
        ];
    }


}
