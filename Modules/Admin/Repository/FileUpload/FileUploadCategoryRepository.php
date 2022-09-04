<?php

namespace Modules\Admin\Repository\FileUpload;

use App\Models\FileUpload\FileUploadCategory;

class FileUploadCategoryRepository
{
    public function getCategories()
    {
        return FileUploadCategory::get();
    }

    public function store($validatedData)
    {
        return FileUploadCategory::create($validatedData);
    }

    public function getOne($id)
    {
        return FileUploadCategory::find($id);
    }

    public function update($validatedData, $id)
    {
        return FileUploadCategory::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $Category = FileUploadCategory::find($id);
        return $Category->delete();
    }
}
