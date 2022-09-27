<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDesignation extends Model
{
    use HasFactory;

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
