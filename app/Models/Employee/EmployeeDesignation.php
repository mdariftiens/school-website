<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class EmployeeDesignation extends Model
{
    protected $table = 'employee_designation';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];


}
