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
    public function index()
    {
        $data = [];
        $data['list'] = Event::get();
        return view('admin::event.index',$data);
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
        $data['EventCategorylist'] = EventCategory::get();
        $data['event'] = Event::find($id);
        return $data;
    }

    public function update($request, $id)
    {
        $validatedData = $request->validated();
        return Event::where('id', $id)->update($validatedData);
    }


    public function destroy($id)
    {
        try {
            $eventCategory = Event::find($id);
            EventCategory::find($eventCategory->category_id)->decrement('number_of_event', 1);
            $delete = $eventCategory->delete();
            DB::commit();
            return $delete;
        }
        catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }


    }
}
