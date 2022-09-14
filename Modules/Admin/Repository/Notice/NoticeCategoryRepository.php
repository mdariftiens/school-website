<?php

namespace Modules\Admin\Repository\Notice;
use App\Models\Notice\NoticeCategory;

class NoticeCategoryRepository
{
    public function getCategories()
    {
        return NoticeCategory::get();
    }

    public function store($validatedData)
    {
        return NoticeCategory::create($validatedData);
    }

    public function getOne($id)
    {
        return NoticeCategory::find($id);
    }

    public function update($validatedData, $id)
    {
        return NoticeCategory::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $eventCategory = NoticeCategory::findOrFail($id);
        return $eventCategory->delete();
    }
}
