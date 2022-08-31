<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required',
            'english_title' => 'required',
            'bangla_title' => 'required',
            'bangla_description' => 'nullable',
            'english_description' => 'nullable',
            'bangla_venue' => 'nullable',
            'english_venue' => 'nullable',
            'from_datetime' => 'required',
            'to_datetime' => 'nullable',
            'is_published' => 'required',
        ];
    }


}
