<?php

namespace Modules\Admin\Repository\Gallery;

use App\Models\Gallery\Gallery;
use App\Models\Media\Mediaables;
use App\Traits\MediaFunctionality;


class GalleryRepository
{
    use MediaFunctionality;

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
        $gallery =  Gallery::create($validatedData);

        $this->addMedia( $gallery->id, Gallery::class);

        return $gallery;
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
        Gallery::find($id)->update($validatedData);

        $this->updateMedia( $id, Gallery::class);
    }


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        $this->removeMedia( $id, Gallery::class);

        return $gallery->delete();
    }
}
