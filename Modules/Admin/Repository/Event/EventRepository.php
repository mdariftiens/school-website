<?php

namespace Modules\Admin\Repository\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
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

    public function create(){
        $data['EventCategorylist'] = EventCategory::get();
        return view('admin::event.create',$data);
    }

    public function store($request)
    {

        $validatedData = $request->validated();
        return Event::create($validatedData);

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['EventCategorylist'] = EventCategory::get();
        $data['event'] = Event::find($id);
        return view('admin::event.edit',$data);
    }

    public function update($request, $id)
    {
        $validatedData = $request->validated();
        return Event::where('id', $id)->update($validatedData);
    }


    public function destroy($id)
    {
        $eventCategory = Event::find($id);
        return $eventCategory->delete();

    }
}
