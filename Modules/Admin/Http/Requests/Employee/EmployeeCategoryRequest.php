<?php

namespace Modules\Admin\Http\Requests\Employee;


use App\Abstracts\FormRequest;

class EmployeeCategoryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required|unique:employee_category,english_name,'.$this->employee_category,
            'bangla_name' => 'required|unique:employee_category,bangla_name,'.$this->employee_category,
        ];
    }


}
