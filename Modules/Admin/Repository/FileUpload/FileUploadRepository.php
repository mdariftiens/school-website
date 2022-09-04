<?php

namespace Modules\Admin\Repository\FileUpload;

use App\Models\FileUpload\FileUpload;
use App\Models\FileUpload\FileUploadCategory;
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
            $notice = FileUpload::create($validatedData);
            FileUploadCategory::find($validatedData['category_id'])->increment('number_of_file');
            DB::commit();
            return $notice;
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
        return FileUpload::find($id)->update($validatedData);

    }


    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $notice = FileUpload::find($id);
            FileUploadCategory::find($notice->category_id)->decrement('number_of_file', 1);
            $delete = $notice->delete();
            DB::commit();
            return $delete;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
