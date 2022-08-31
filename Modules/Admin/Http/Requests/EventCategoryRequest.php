<?php

namespace Modules\Admin\Http\Requests;


use App\Abstracts\FormRequest;

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
            'english_name' => 'required|unique:event_categories,english_name,'.$this->event_category,
            'bangla_name' => 'required|unique:event_categories,bangla_name,'.$this->event_category,
        ];
    }


}
