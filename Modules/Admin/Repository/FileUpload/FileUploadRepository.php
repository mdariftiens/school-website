<?php

namespace Modules\Admin\Repository\FileUpload;

use App\Models\FileUpload\FileUpload;
use App\Models\FileUpload\FileUploadCategory;
use App\Models\Media\Mediaables;
use App\Models\Notice\Notice;
use App\Traits\MediaFunctionality;
use Illuminate\Support\Facades\DB;


class FileUploadRepository
{
    use MediaFunctionality;

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

            $this->addMedia( $fileUpload->id, FileUpload::class);

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

        $this->updateMedia($id, FileUpload::class);

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

            $this->removeMedia($id, FileUpload::class);

            DB::commit();
            return $delete;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
