<?php

namespace Modules\Admin\Repository\Blog;

use App\Models\Blog\Category;
use App\Traits\MediaFunctionality;

class CategoryRepository
{
    use MediaFunctionality;

    public function getList()
    {
        return Category::get();
    }

    public function getOne($id)
    {
        return Category::find($id);
    }

    public function store($validatedData)
    {
        return Category::create($validatedData);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return Category::find($id);
    }

    public function update($validatedData, $id)
    {
        return Category::find($id)->update($validatedData);
    }

    public function destroy($id)
    {
        $result = Category::findOrFail($id);
        return $result->delete();
    }
}
