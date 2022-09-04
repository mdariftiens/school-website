<?php

namespace Modules\Admin\Repository\FileUpload;

use App\Models\FileUpload\FileUpload;

class FileUploadCategoryRepository
{
    public function getCategories()
    {
        return FileUpload::get();
    }

    public function store($validatedData)
    {
        return FileUpload::create($validatedData);
    }

    public function getOne($id)
    {
        return FileUpload::find($id);
    }

    public function update($validatedData, $id)
    {
        return FileUpload::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $Category = FileUpload::find($id);
        return $Category->delete();
    }
}
