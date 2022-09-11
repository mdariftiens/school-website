<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
    use HasFactory;

    protected $table = 'employee_category';

    protected $fillable = [
        'english_name',
        'bangla_name',
    ];


}
