<?php

namespace Modules\Admin\Repository\Notice;

use App\Models\Media\Mediaables;
use App\Models\Notice\Notice;
use App\Models\Notice\NoticeCategory;
use Illuminate\Support\Facades\DB;

class NoticeRepository
{
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

            if (request()->has('mediaids')){
                foreach (request()->mediaids as $mediaId){
                    Mediaables::create([
                        'media_id' => $mediaId,
                        'mediaable_id' => $notice->id,
                        'mediaable_type' => Notice::class,
                    ]);
                }
            }
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

        Mediaables::where([
            'mediaable_id' => $id,
            'mediaable_type' => Notice::class,
        ])->forceDelete();

        if (request()->has('mediaids')){
            foreach (request()->mediaids as $mediaId){
                Mediaables::create([
                    'media_id' => $mediaId,
                    'mediaable_id' => $id,
                    'mediaable_type' => Notice::class,
                ]);
            }
        }

    }


    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $notice = Notice::findOrFail($id);
            NoticeCategory::find($notice->category_id)->decrement('number_of_notice', 1);
            $delete = $notice->delete();

            Mediaables::where([
                'mediaable_id' => $id,
                'mediaable_type' => Notice::class,
            ])->forceDelete();

            DB::commit();
            return $delete;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
