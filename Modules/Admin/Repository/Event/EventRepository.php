<?php

namespace Modules\Admin\Repository\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Classes\Themes;
use Modules\Admin\Entities\Widgets\WidgetBar;

class EventRepository
{
    public function getEvent()
    {
        return Event::get();
    }

    public function get(){
        return  EventCategory::get();
    }

    public function store($validatedData)
    {
        DB::beginTransaction();

        try {
            $event = Event::create($validatedData);
            EventCategory::find($validatedData['category_id'])->increment('number_of_event');
            DB::commit();
            return $event;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
         return Event::find($id);
    }

    public function update($validatedData, $id)
    {
        return Event::find($id)->update($validatedData);

    }


    public function destroy($id)
    {
        try {
            $event = Event::findOrFail($id);
            $eventCategory = EventCategory::find($event->category_id);

            if ($eventCategory && $eventCategory->number_of_event > 0){
                $eventCategory->decrement('number_of_event', 1);
            }

            $delete = $event->delete();
            DB::commit();
            return $delete;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
