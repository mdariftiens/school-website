<?php

namespace Modules\Admin\Repository\Slider;

use App\Models\Slider\Slider;


class SliderRepository
{
    public function getList()
    {
        return Slider::get();
    }

    public function getOne($id)
    {
        return Slider::find($id);
    }

    public function store($validatedData)
    {
        return Slider::create($validatedData);
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
        return Slider::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $result = Slider::find($id);
        return $result->delete();
    }
}
