<?php

namespace Modules\Admin\Http\Requests\Employee;


use App\Abstracts\FormRequest;

class EmployeeDepartmentRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required|unique:employee_department,english_name,'.$this->employee_department,
            'bangla_name' => 'required|unique:employee_department,bangla_name,'.$this->employee_department,
        ];
    }


}
