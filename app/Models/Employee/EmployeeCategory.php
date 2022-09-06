<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
    protected $table = 'employee_category';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];


}
