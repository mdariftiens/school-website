<?php

namespace Modules\Admin\Http\Requests\Notice;


use App\Abstracts\FormRequest;

class NoticeCategoryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required|unique:notice_categories,english_name,'.$this->notice_category,
            'bangla_name' => 'required|unique:notice_categories,bangla_name,'.$this->notice_category,
        ];
    }


}
