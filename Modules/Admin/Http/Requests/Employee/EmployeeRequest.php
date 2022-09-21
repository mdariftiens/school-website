<?php

namespace Modules\Admin\Http\Requests\Employee;


use App\Abstracts\FormRequest;

class EmployeeRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required',
            'bangla_name' => 'required',
            'employee_identification_number' => 'nullable',
            'designation_id' => 'required',
            'department_id' => 'required',
            'employee_category_id' => 'nullable',
            'employee_type_id' => 'nullable',
            'english_description' => 'nullable',
            'bangla_description' => 'nullable',
            'email' => 'nullable',
            'date_of_birth' => 'nullable',
            'date_of_joining' => 'nullable',
            'blood_group' => 'nullable',
            'educational_qualification' => 'nullable',
            'major_subject' => 'nullable',
            'priority' => 'nullable',
            'image' => 'nullable',
        ];
    }


}
