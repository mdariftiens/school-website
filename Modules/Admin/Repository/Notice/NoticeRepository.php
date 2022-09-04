<?php

namespace Modules\Admin\Repository\Notice;

use App\Models\Notice\Notice;
use App\Models\Notice\NoticeCategory;
use Illuminate\Support\Facades\DB;

class NoticeRepository
{
    public function getEvent()
    {
        return Notice::get();
    }

    public function getOne($id){
        return  Notice::find($id);
    }

    public function store($validatedData)
    {
        DB::beginTransaction();

        try {
            $notice = Notice::create($validatedData);
            NoticeCategory::find($validatedData['category_id'])->increment('number_of_notice');
            DB::commit();
            return $notice;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return Notice::find($id);
    }

    public function update($validatedData, $id)
    {
        return Notice::find($id)->update($validatedData);

    }


    public function destroy($id)
    {
        try {
            $notice = Notice::find($id);
            NoticeCategory::find($notice->category_id)->decrement('number_of_notice', 1);
            $delete = $notice->delete();
            DB::commit();
            return $delete;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
