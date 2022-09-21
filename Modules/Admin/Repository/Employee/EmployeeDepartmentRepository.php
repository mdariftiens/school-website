<?php

namespace Modules\Admin\Repository\Employee;
use App\Models\Employee\EmployeeDepartment;

class EmployeeDepartmentRepository
{
    public function getCategories()
    {
        return EmployeeDepartment::get();
    }

    public function store($validatedData)
    {
        return EmployeeDepartment::create($validatedData);
    }

    public function getOne($id)
    {
        return EmployeeDepartment::find($id);
    }

    public function update($validatedData, $id)
    {
        return EmployeeDepartment::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $eventCategory = EmployeeDepartment::findOrFail($id);
        return $eventCategory->delete();
    }
}
