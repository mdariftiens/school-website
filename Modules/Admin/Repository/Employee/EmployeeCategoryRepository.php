<?php

namespace Modules\Admin\Repository\Employee;
use App\Models\Employee\EmployeeCategory;

class EmployeeCategoryRepository
{
    public function getCategories()
    {
        return EmployeeCategory::get();
    }

    public function store($validatedData)
    {
        return EmployeeCategory::create($validatedData);
    }

    public function getOne($id)
    {
        return EmployeeCategory::find($id);
    }

    public function update($validatedData, $id)
    {
        return EmployeeCategory::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $eventCategory = EmployeeCategory::findOrFail($id);
        return $eventCategory->delete();
    }
}
