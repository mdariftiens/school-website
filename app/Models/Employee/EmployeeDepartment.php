<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class EmployeeDepartment extends Model
{
    protected $table = 'employee_department';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];


}
