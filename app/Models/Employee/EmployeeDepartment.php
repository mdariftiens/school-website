<?php

namespace App\Models\Employee;

use App\Abstracts\Model;

class EmployeeDepartment extends Model
{

    protected $table = 'employee_department';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class,'department_id');
    }
}
