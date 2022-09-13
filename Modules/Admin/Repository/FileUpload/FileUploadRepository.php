<?php

namespace Modules\Admin\Repository\FileUpload;

use App\Models\FileUpload\FileUpload;
use App\Models\FileUpload\FileUploadCategory;
use App\Models\Media\Mediaables;
use App\Models\Notice\Notice;
use Illuminate\Support\Facades\DB;


class FileUploadRepository
{
    public function getFiles()
    {
        return FileUpload::get();
    }

    public function getOne($id)
    {
        return FileUpload::find($id);
    }

    public function store($validatedData)
    {
        DB::beginTransaction();

        try {
            $fileUpload = FileUpload::create($validatedData);
            FileUploadCategory::find($validatedData['category_id'])->increment('number_of_file');

            if (request()->has('mediaids')){
                foreach (request()->mediaids as $mediaId){
                    Mediaables::create([
                        'media_id' => $mediaId,
                        'mediaable_id' => $fileUpload->id,
                        'mediaable_type' => FileUpload::class,
                    ]);
                }
            }
            DB::commit();
            return $fileUpload;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return FileUpload::find($id);
    }

    public function update($validatedData, $id)
    {
        FileUpload::find($id)->update($validatedData);

        Mediaables::where([
            'mediaable_id' => $id,
            'mediaable_type' => FileUpload::class,
        ])->forceDelete();

        if (request()->has('mediaids')){
            foreach (request()->mediaids as $mediaId){
                Mediaables::create([
                    'media_id' => $mediaId,
                    'mediaable_id' => $id,
                    'mediaable_type' => FileUpload::class,
                ]);
            }
        }

    }


    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $fileUpload = FileUpload::findOrFail($id);
            $category = FileUploadCategory::find($fileUpload->category_id);
            if ($category && $category->number_of_file > 0){
                $category->decrement('number_of_file');
            }
            $delete = $fileUpload->delete();

            Mediaables::where([
                'mediaable_id' => $id,
                'mediaable_type' => FileUpload::class,
            ])->forceDelete();

            DB::commit();
            return $delete;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
