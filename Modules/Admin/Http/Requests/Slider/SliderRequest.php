<?php

namespace Modules\Admin\Http\Requests\Slider;


use App\Abstracts\FormRequest;

class SliderRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_title' => 'required',
            'bangla_title' => 'required',
            'english_description' => 'nullable',
            'bangla_description' => 'nullable',
            'is_published' => 'nullable',
            'priority' => 'nullable',
        ];
    }


}
