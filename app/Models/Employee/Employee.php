<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'english_name',
        'bangla_name',
        'employee_identification_number',
        'designation_id',
        'department_id',
        'english_description',
        'bangla_description',
        'employee_category_id',
        'employee_type',
        'contact_number',
        'email',
        'date_of_birth',
        'date_of_joining',
        'blood_group',
        'educational_qualification',
        'major_subject',
        'priority',
        'image',
    ];


}
