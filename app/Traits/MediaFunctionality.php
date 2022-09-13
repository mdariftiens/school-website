<?php

namespace App\Traits;

use App\Models\Media\Mediaables;

trait MediaFunctionality
{

    public function addMedia(int $mediaableId, $mediaableType){

        if (request()->has('mediaids')){
            foreach (request()->mediaids as $mediaId){
                Mediaables::create([
                    'media_id' => $mediaId,
                    'mediaable_id' => $mediaableId,
                    'mediaable_type' => $mediaableType,
                ]);
            }
        }
    }

    public function updateMedia(int $mediaableId, $mediaableType){

        $this->removeMedia($mediaableId, $mediaableType);

        $this->addMedia($mediaableId, $mediaableType);
    }

    public function removeMedia(int $mediaableId, $mediaableType){
        Mediaables::where([
            'mediaable_id' => $mediaableId,
            'mediaable_type' => $mediaableType,
        ])->forceDelete();
    }
}
