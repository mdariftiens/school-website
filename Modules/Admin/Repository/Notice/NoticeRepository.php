<?php

namespace Modules\Admin\Repository\Notice;

use App\Models\Media\Mediaables;
use App\Models\Notice\Notice;
use App\Models\Notice\NoticeCategory;
use App\Traits\MediaFunctionality;
use Illuminate\Support\Facades\DB;

class NoticeRepository
{
    use MediaFunctionality;

    public function getNotice()
    {
        return Notice::get();
    }

    public function getOne($id){
        return  Notice::with('media')->find($id);
    }

    public function store($validatedData)
    {
        DB::beginTransaction();

        try {
            $notice = Notice::create($validatedData);

            $this->addMedia($notice->id, Notice::class);

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


    public function update($validatedData, $id)
    {
        Notice::find($id)->update($validatedData);

        $this->updateMedia($id, Notice::class);

    }


    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $noticeCategory = NoticeCategory::find($notice->category_id);

        DB::beginTransaction();

        try {
            if ($noticeCategory && $noticeCategory->number_of_notice > 0){
                $noticeCategory->decrement('number_of_notice');
            }

            $delete = $notice->delete();

            $this->removeMedia($id, Notice::class);

            DB::commit();
            return $delete;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
