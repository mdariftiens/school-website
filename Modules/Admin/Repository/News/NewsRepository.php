<?php

namespace Modules\Admin\Repository\News;

use App\Models\News\News;
use App\Traits\MediaFunctionality;

class NewsRepository
{
    use MediaFunctionality;

    public function getList()
    {
        return News::get();
    }

    public function getOne($id)
    {
        return News::find($id);
    }

    public function store($validatedData)
    {
        return News::create($validatedData);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return News::find($id);
    }

    public function update($validatedData, $id)
    {
        return News::find($id)->update($validatedData);
    }

    public function destroy($id)
    {
        $result = News::findOrFail($id);
        return $result->delete();
    }
}
