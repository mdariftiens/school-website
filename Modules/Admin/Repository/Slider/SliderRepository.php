<?php

namespace Modules\Admin\Repository\Slider;

use App\Models\Event\Event;
use App\Models\Media\Mediaables;
use App\Models\Slider\Slider;


class SliderRepository
{
    public function getList()
    {
        return Slider::get();
    }

    public function getOne($id)
    {
        return Slider::with('media')->find($id);
    }

    public function store($validatedData)
    {
        $slider =  Slider::create($validatedData);

        foreach ($validatedData['mediaids'] as $mediaId){
            Mediaables::create([
                'media_id' => $mediaId,
                'mediaable_id' => $slider->id,
                'mediaable_type' => Slider::class,
            ]);
        }

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return Slider::find($id);
    }

    public function update($validatedData, $id)
    {
        Slider::find($id)->update($validatedData);

        Mediaables::where([
            'mediaable_id' => $id,
            'mediaable_type' => Slider::class,
        ])->forceDelete();

        foreach ($validatedData['mediaids'] as $mediaId){
            Mediaables::create([
                'media_id' => $mediaId,
                'mediaable_id' => $id,
                'mediaable_type' => Slider::class,
            ]);
        }

    }

    public function destroy($id)
    {
        $result = Slider::find($id);
        return $result->delete();
    }
}
