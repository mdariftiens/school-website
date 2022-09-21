<?php

namespace Modules\Admin\Http\Controllers\Employee;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Employee\EmployeeCategoryRequest;
use Modules\Admin\Repository\Employee\EmployeeCategoryRepository;

class EmployeeCategoryController extends Controller
{
    private $employeeCategoryRepository;

    public function __construct(EmployeeCategoryRepository $employeeCategoryRepository)
    {
        $this->employeeCategoryRepository = $employeeCategoryRepository;
    }

    public function index()
    {
        $data['list'] = $this->employeeCategoryRepository->getCategories();
        return view('admin::employee.employee_category.index',$data);
    }

    public function create(){
        return view('admin::employee.employee_category.create');
    }

    public function store(EmployeeCategoryRequest $request)
    {
        $this->employeeCategoryRepository->store($request->validated());
        return redirect()->route('employee-category.index')->with(['message'=>'Category created successfully.']);
    }


    public function edit($id)
    {
        $data['category'] = $this->employeeCategoryRepository->getOne($id);
        return view('admin::employee.employee_category.edit',$data);
    }

    public function update(EmployeeCategoryRequest $request, $id)
    {
        $this->employeeCategoryRepository->update($request->validated(), $id);
        return redirect()->route('employee-category.index')->with(['message'=>'Category update successfully.']);
    }


    public function destroy($id)
    {
        $this->employeeCategoryRepository->destroy($id);
        return back()->with(['message'=>'Category update successfully.']);
    }
}
