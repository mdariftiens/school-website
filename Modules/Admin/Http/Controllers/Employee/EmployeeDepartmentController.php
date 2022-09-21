<?php

namespace Modules\Admin\Http\Controllers\Employee;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Employee\EmployeeCategoryRequest;
use Modules\Admin\Http\Requests\Employee\EmployeeDepartmentRequest;
use Modules\Admin\Repository\Employee\EmployeeDepartmentRepository;

class EmployeeDepartmentController extends Controller
{
    private $employeeDepartmentRepository;

    public function __construct(EmployeeDepartmentRepository $employeeDepartmentRepository)
    {
        $this->employeeDepartmentRepository = $employeeDepartmentRepository;
    }

    public function index()
    {
        $data['list'] = $this->employeeDepartmentRepository->getCategories();
        return view('admin::employee.employee_department.index',$data);
    }

    public function create(){
        return view('admin::employee.employee_department.create');
    }

    public function store(EmployeeDepartmentRequest $request)
    {
        $this->employeeDepartmentRepository->store($request->validated());
        return redirect()->route('employee-department.index')->with(['message'=>'Data created successfully.']);
    }


    public function edit($id)
    {
        $data['category'] = $this->employeeDepartmentRepository->getOne($id);
        return view('admin::employee.employee_department.edit',$data);
    }

    public function update(EmployeeDepartmentRequest $request, $id)
    {
        $this->employeeDepartmentRepository->update($request->validated(), $id);
        return redirect()->route('employee-department.index')->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->employeeDepartmentRepository->destroy($id);
        return back()->with(['message'=>'Data update successfully.']);
    }
}
