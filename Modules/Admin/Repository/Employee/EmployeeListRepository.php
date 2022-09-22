<?php

namespace Modules\Admin\Repository\Employee;

use App\Models\Employee\Employee;
use App\Traits\MediaFunctionality;
use Illuminate\Support\Facades\DB;

class EmployeeListRepository
{
    use MediaFunctionality;

    public function getNotice()
    {
        return Employee::get();
    }

    public function getOne($id){
        return  Employee::find($id);
    }

    public function store($validatedData)
    {
        return Employee::create($validatedData);
//        DB::beginTransaction();
//
//        try {
//            $notice = Notice::create($validatedData);
//
//            $this->addMedia($notice->id, Notice::class);
//
//            NoticeCategory::find($validatedData['category_id'])->increment('number_of_notice');
//            DB::commit();
//            return $notice;
//        }
//        catch (\Throwable $e) {
//            DB::rollBack();
//            throw $e;
//        }
    }

    public function show($id)
    {

    }


    public function update($validatedData, $id)
    {
        return Employee::find($id)->update($validatedData);

//        $this->updateMedia($id, Employee::class);

    }


    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee->delete();

//        DB::beginTransaction();
//        try {
//            $notice = Notice::findOrFail($id);
//            $noticeCategory = NoticeCategory::find($notice->category_id);
//            if ($noticeCategory && $noticeCategory->number_of_notice > 0){
//                $noticeCategory->decrement('number_of_notice');
//            }
//            $delete = $notice->delete();
//
//            $this->removeMedia($id, Notice::class);
//
//            DB::commit();
//            return $delete;
//        }
//        catch (\Throwable $e) {
//            DB::rollBack();
//            throw $e;
//        }


    }
}
