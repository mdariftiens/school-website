<?php

namespace Modules\Admin\Http\Controllers\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\EventRequest;
use Modules\Admin\Repository\Event\EventRepository;

class EventController extends Controller
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        return $this->eventRepository->index();
    }

    public function create(){
        $data['EventCategorylist'] = $this->eventRepository->get();
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
        $data = $this->eventRepository->edit($id);
        return view('admin::event.edit',$data);
    }

    public function update(EventRequest $request, $id)
    {
        $this->eventRepository->update($request, $id);
        return back()->with(['message'=>'Event update successfully.']);
    }


    public function destroy($id)
    {
        $this->eventRepository->destroy($id);
        return back()->with(['message'=>'Event delete successfully.']);
    }
}
