<?php

namespace Database\Seeders;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeCategory;
use App\Models\Employee\EmployeeDepartment;
use App\Models\Employee\EmployeeDesignation;
use App\Models\Employee\EmployeeType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        EmployeeDepartment::factory(config('seeder.employee_department'))->create();
        EmployeeCategory::factory(config('seeder.employee_category'))->create();
        EmployeeDesignation::factory(config('seeder.employee_designation'))->create();
        EmployeeType::factory(config('seeder.employee_type'))->create();

        for ($i = 1; $i< config('seeder.employee'); $i++){
            Employee::factory()->create(['priority' => $i]);
        }

    }
}
