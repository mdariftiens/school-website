<?php

namespace App\Models\Employee;

use App\Abstracts\Model;

class EmployeeCategory extends Model
{

    protected $table = 'employee_category';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
