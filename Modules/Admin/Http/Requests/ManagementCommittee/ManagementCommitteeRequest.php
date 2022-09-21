<?php

namespace Modules\Admin\Http\Requests\ManagementCommittee;


use App\Abstracts\FormRequest;

class ManagementCommitteeRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required',
            'english_designation' => 'required',
            'bangla_name' => 'required',
            'bangla_designation' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            "priority"    => "required",
        ];
    }


}
