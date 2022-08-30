<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'english_name' => 'required|unique:event_categories,id',
            'bangla_name' => 'required|unique:event_categories,id',
        ];
    }


}
