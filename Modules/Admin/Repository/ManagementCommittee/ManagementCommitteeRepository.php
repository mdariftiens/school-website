<?php

namespace Modules\Admin\Repository\ManagementCommittee;

use App\Models\ManagementCommittee\ManagementCommittee;
use App\Traits\MediaFunctionality;


class ManagementCommitteeRepository
{
    use MediaFunctionality;

    public function getList()
    {
        return ManagementCommittee::get();
    }

    public function getOne($id)
    {
        return ManagementCommittee::find($id);
    }

    public function store($validatedData)
    {
        $slider =  ManagementCommittee::create($validatedData);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return ManagementCommittee::find($id);
    }

    public function update($validatedData, $id)
    {
        return ManagementCommittee::find($id)->update($validatedData);
    }

    public function destroy($id)
    {
        $result = ManagementCommittee::findOrFail($id);
        return $result->delete();
    }
}
