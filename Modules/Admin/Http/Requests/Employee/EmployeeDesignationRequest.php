<?php

namespace Modules\Admin\Http\Requests\Employee;


use App\Abstracts\FormRequest;

class EmployeeDesignationRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required|unique:employee_designation,english_name,'.$this->employee_designation,
            'bangla_name' => 'required|unique:employee_designation,bangla_name,'.$this->employee_designation,
        ];
    }


}
