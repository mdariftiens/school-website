<?php

namespace Modules\Admin\Http\Requests\Slider;


use App\Abstracts\FormRequest;

class MessageRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_title' => 'required',
            'bangla_title' => 'required',
            'english_name' => 'required',
            'bangla_name' => 'required',
            'english_designation' => 'nullable',
            'bangla_designation' => 'nullable',
            'english_message' => 'nullable',
            'bangla_message' => 'nullable',
            'image' => 'nullable',
            'priority' => 'nullable',
        ];
    }


}
