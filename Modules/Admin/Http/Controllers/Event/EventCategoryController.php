<?php

namespace Modules\Admin\Http\Controllers\Event;

use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\EventCategoryRequest;

class EventCategoryController extends Controller
{
//    private $mediaRepository;
//
//    public function __construct(MediaRepository $mediaRepository)
//    {
//        $this->mediaRepository = $mediaRepository;
//    }

    public function index()
    {
        $data = [];
        $data['list'] = EventCategory::get();
        return view('admin::event.event_category.index',$data);
    }

    public function create(){
        return view('admin::event.event_category.create');
    }

    public function store(EventCategoryRequest $request)
    {

        $validatedData = $request->validated();
        $result = Event::create($validatedData);
        if ($result){
            return back()->with('success', 'Event category created successfully.');
        }
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['eventCategory'] = EventCategory::find($id);
        return view('admin::event.event_category.edit',$data);
    }

    public function update(EventCategoryRequest $request, $id)
    {
        $validatedData = $request->validated();
        $result = EventCategory::where('id', $id)->update($validatedData);
        if ($result){
            return back()->with('success', 'Event category update successfully.');
        }
    }


    public function destroy($id)
    {
        $eventCategory = EventCategory::find($id);
        $result = $eventCategory->delete();
        if ($result){
            return back()->with('success', 'Event category update successfully.');
        }
    }
}
