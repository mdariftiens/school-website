<?php

namespace Modules\Admin\Repository\Gallery;

use App\Models\Gallery\Gallery;
use App\Models\Media\Mediaables;


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
        $gallery =  Gallery::create($validatedData);

        if (request()->has('mediaids')){
            foreach (request()->mediaids as $mediaId){
                Mediaables::create([
                    'media_id' => $mediaId,
                    'mediaable_id' => $gallery->id,
                    'mediaable_type' => Gallery::class,
                ]);
            }
        }
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

        Mediaables::where([
            'mediaable_id' => $id,
            'mediaable_type' => Gallery::class,
        ])->forceDelete();

        if (request()->has('mediaids')){
            foreach (request()->mediaids as $mediaId){
                Mediaables::create([
                    'media_id' => $mediaId,
                    'mediaable_id' => $id,
                    'mediaable_type' => Gallery::class,
                ]);
            }
        }
    }


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        Mediaables::where([
            'mediaable_id' => $id,
            'mediaable_type' => Gallery::class,
        ])->forceDelete();


        return $gallery->delete();
    }
}
