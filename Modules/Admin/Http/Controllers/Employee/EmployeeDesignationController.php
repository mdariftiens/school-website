<?php

namespace Modules\Admin\Http\Controllers\Employee;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Employee\EmployeeDesignationRequest;
use Modules\Admin\Repository\Employee\EmployeeDesignationRepository;

class EmployeeDesignationController extends Controller
{
    private $employeeDesignationRepository;

    public function __construct(EmployeeDesignationRepository $employeeDesignationRepository)
    {
        $this->employeeDesignationRepository = $employeeDesignationRepository;
    }

    public function index()
    {
        $data['list'] = $this->employeeDesignationRepository->getCategories();
        return view('admin::employee.employee_designation.index',$data);
    }

    public function create(){
        return view('admin::employee.employee_designation.create');
    }

    public function store(EmployeeDesignationRequest $request)
    {
        $this->employeeDesignationRepository->store($request->validated());
        return redirect()->route('employee-designation.index')->with(['message'=>'Data created successfully.']);
    }


    public function edit($id)
    {
        $data['category'] = $this->employeeDesignationRepository->getOne($id);
        return view('admin::employee.employee_designation.edit',$data);
    }

    public function update(EmployeeDesignationRequest $request, $id)
    {
        $this->employeeDesignationRepository->update($request->validated(), $id);
        return redirect()->route('employee-designation.index')->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->employeeDesignationRepository->destroy($id);
        return back()->with(['message'=>'Data update successfully.']);
    }
}
