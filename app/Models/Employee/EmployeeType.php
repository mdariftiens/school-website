<?php

namespace App\Models\Employee;

use App\Abstracts\Model;

class EmployeeType extends Model
{

    protected $table = 'employee_type';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];


}
