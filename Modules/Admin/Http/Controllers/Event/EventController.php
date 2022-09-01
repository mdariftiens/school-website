<?php

namespace Modules\Admin\Http\Controllers\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\EventRequest;
use Modules\Admin\Repository\Event\EventCategoryRepository;
use Modules\Admin\Repository\Event\EventRepository;

class EventController extends Controller
{
    private $eventRepository;
    private $eventCategoryRepository;

    public function __construct(EventRepository $eventRepository, EventCategoryRepository $eventCategoryRepository)
    {
        $this->eventRepository = $eventRepository;
        $this->eventCategoryRepository = $eventCategoryRepository;
    }

    public function index()
    {
        $data['list'] =  $this->eventRepository->getEvent();
        return view('admin::event.index',$data);
    }

    public function create(){
        $data['EventCategorylist'] = $this->eventCategoryRepository->getEventCategory();
        return view('admin::event.create',$data);
    }

    public function store( EventRequest $request )
    {
        $this->eventRepository->store($request->validated());
        return back()->with(['message'=>'Event create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['EventCategorylist'] = $this->eventCategoryRepository->getEventCategory();
        $data['event'] = $this->eventRepository->edit($id);
        return view('admin::event.edit',$data);
    }

    public function update(EventRequest $request, $id)
    {
        $this->eventRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Event update successfully.']);
    }


    public function destroy($id)
    {
        $this->eventRepository->destroy($id);
        return back()->with(['message'=>'Event delete successfully.']);
    }
}
