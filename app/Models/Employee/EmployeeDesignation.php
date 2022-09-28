<?php

namespace App\Models\Employee;

use App\Abstracts\Model;

class EmployeeDesignation extends Model
{

    protected $table = 'employee_designation';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];


    public function employees()
    {
        return $this->hasMany(Employee::class,'designation_id');
    }
}
