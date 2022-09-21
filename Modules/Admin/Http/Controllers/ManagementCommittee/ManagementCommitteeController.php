<?php

namespace Modules\Admin\Http\Controllers\ManagementCommittee;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\ManagementCommittee\ManagementCommitteeRequest;
use Modules\Admin\Repository\ManagementCommittee\ManagementCommitteeRepository;

class ManagementCommitteeController extends Controller
{
    private $managementCommitteeRepository;

    public function __construct(ManagementCommitteeRepository $managementCommitteeRepository)
    {
        $this->managementCommitteeRepository = $managementCommitteeRepository;
    }

    public function index()
    {
        $data['list'] =  $this->managementCommitteeRepository->getList();
        return view('admin::management_committee.index',$data);
    }

    public function create(){
        return view('admin::management_committee.create');
    }

    public function store( ManagementCommitteeRequest $request )
    {
        $this->managementCommitteeRepository->store($request->validated());
        return back()->with(['message'=>'Data create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->managementCommitteeRepository->getOne($id);
        return view('admin::management_committee.edit',$data);
    }

    public function update(ManagementCommitteeRequest $request, $id)
    {
        $this->managementCommitteeRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->managementCommitteeRepository->destroy($id);
        return back()->with(['message'=>'Data delete successfully.']);
    }
}
