<?php

namespace Modules\Admin\Repository\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Classes\Themes;
use Modules\Admin\Entities\Widgets\WidgetBar;

class EventCategoryRepository
{
    public function getEventCategory()
    {
        return EventCategory::get();
    }


    public function store($validatedData)
    {
        return EventCategory::create($validatedData);
    }

    public function edit($id)
    {
         return EventCategory::find($id);
    }

    public function update($validatedData, $id)
    {
        return EventCategory::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $eventCategory = EventCategory::findOrFail($id);
        return $eventCategory->delete();
    }
}
