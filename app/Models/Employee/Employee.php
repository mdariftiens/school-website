<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    function category(): BelongsTo
    {
        return $this->belongsTo(EmployeeCategory::class,'employee_category_id');
    }

    function department(): BelongsTo
    {
        return $this->belongsTo(EmployeeDepartment::class);
    }

    function designation(): BelongsTo
    {
        return $this->belongsTo(EmployeeDesignation::class);
    }

    function type(): BelongsTo
    {
        return $this->belongsTo(EmployeeType::class,'employee_type_id');
    }

}
