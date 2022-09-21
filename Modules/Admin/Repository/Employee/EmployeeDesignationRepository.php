<?php

namespace Modules\Admin\Repository\Employee;
use App\Models\Employee\EmployeeDesignation;

class EmployeeDesignationRepository
{
    public function getCategories()
    {
        return EmployeeDesignation::get();
    }

    public function store($validatedData)
    {
        return EmployeeDesignation::create($validatedData);
    }

    public function getOne($id)
    {
        return EmployeeDesignation::find($id);
    }

    public function update($validatedData, $id)
    {
        return EmployeeDesignation::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $eventCategory = EmployeeDesignation::findOrFail($id);
        return $eventCategory->delete();
    }
}
