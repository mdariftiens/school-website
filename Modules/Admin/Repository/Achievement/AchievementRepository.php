<?php

namespace Modules\Admin\Repository\Achievement;

use App\Models\Achievements\Achievements;
use App\Traits\MediaFunctionality;

class AchievementRepository
{
    use MediaFunctionality;

    public function getList()
    {
        return Achievements::get();
    }

    public function getOne($id)
    {
        return Achievements::find($id);
    }

    public function store($validatedData)
    {
        return Achievements::create($validatedData);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return Achievements::find($id);
    }

    public function update($validatedData, $id)
    {
        return Achievements::find($id)->update($validatedData);
    }

    public function destroy($id)
    {
        $result = Achievements::findOrFail($id);
        return $result->delete();
    }
}
