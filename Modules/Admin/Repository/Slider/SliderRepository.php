<?php

namespace Modules\Admin\Repository\Slider;

use App\Models\Event\Event;
use App\Models\Media\Mediaables;
use App\Models\Slider\Slider;
use App\Traits\MediaFunctionality;


class SliderRepository
{
    use MediaFunctionality;

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

        $this->addMedia($slider->id, Slider::class);

        return $slider;
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

        $this->updateMedia($id, Slider::class);

    }

    public function destroy($id)
    {
        $result = Slider::findOrFail($id);
        $this->removeMedia($id, Slider::class);
        return $result->delete();
    }
}
