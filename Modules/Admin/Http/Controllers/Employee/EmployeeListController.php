<?php

namespace Modules\Admin\Http\Controllers\Employee;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Employee\EmployeeRequest;
use Modules\Admin\Http\Requests\Notice\NoticeRequest;
use Modules\Admin\Repository\Employee\EmployeeCategoryRepository;
use Modules\Admin\Repository\Employee\EmployeeDepartmentRepository;
use Modules\Admin\Repository\Employee\EmployeeDesignationRepository;
use Modules\Admin\Repository\Employee\EmployeeListRepository;

class EmployeeListController extends Controller
{
    private $employeeListRepository;
    private $employeeDepartmentRepository;
    private $employeeDesignationRepository;
    private $employeeCategoryRepository;

    public function __construct(EmployeeListRepository $employeeListRepository, EmployeeCategoryRepository $employeeCategoryRepository, EmployeeDepartmentRepository $employeeDepartmentRepository, EmployeeDesignationRepository $employeeDesignationRepository)
    {
        $this->employeeListRepository = $employeeListRepository;
        $this->employeeCategoryRepository = $employeeCategoryRepository;
        $this->employeeDepartmentRepository = $employeeDepartmentRepository;
        $this->employeeDesignationRepository = $employeeDesignationRepository;
    }

    public function index()
    {
        $data['list'] =  $this->employeeListRepository->getNotice();
        return view('admin::employee.index',$data);
    }

    public function create(){
        $data['employeeCategories'] = $this->employeeCategoryRepository->getCategories();
        $data['employeeDepartment'] = $this->employeeDepartmentRepository->getCategories();
        $data['employeeDesignation'] = $this->employeeDesignationRepository->getCategories();
        return view('admin::employee.create',$data);
    }

    public function store( EmployeeRequest $request )
    {
        $this->employeeListRepository->store($request->validated());
        return redirect()->route('employee-list.index')->with(['message'=>'Data create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['employeeCategories'] = $this->employeeCategoryRepository->getCategories();
        $data['employeeDepartment'] = $this->employeeDepartmentRepository->getCategories();
        $data['employeeDesignation'] = $this->employeeDesignationRepository->getCategories();
        $data['row'] = $this->employeeListRepository->getOne($id);
        return view('admin::employee.edit',$data);
    }

    public function update(EmployeeRequest $request, $id)
    {
        $this->employeeListRepository->update($request->validated(), $id);
        return redirect()->route('employee-list.index')->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->employeeListRepository->destroy($id);
        return back()->with(['message'=>'Notice delete successfully.']);
    }
}
