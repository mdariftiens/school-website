<?php

namespace Modules\Admin\Repository\Gallery;

use App\Models\Gallery\Gallery;


class GalleryRepository
{
    public function getFiles()
    {
        return Gallery::get();
    }

    public function getOne($id)
    {
        return Gallery::find($id);
    }

    public function store($validatedData)
    {
        return Gallery::create($validatedData);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return Gallery::find($id);
    }

    public function update($validatedData, $id)
    {
        return Gallery::find($id)->update($validatedData);

    }


    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        return $gallery->delete();
    }
}
