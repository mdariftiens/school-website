<?php

namespace Modules\Admin\Http\Controllers\Event;

use App\Models\Event\Event;
use App\Models\Event\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\EventCategoryRequest;
use Modules\Admin\Repository\Event\EventCategoryRepository;

class EventCategoryController extends Controller
{
    private $eventCategoryRepository;

    public function __construct(EventCategoryRepository $eventCategoryRepository)
    {
        $this->eventCategoryRepository = $eventCategoryRepository;
    }

    public function index()
    {
        $data['list'] = $this->eventCategoryRepository->getEventCategory();
        return view('admin::event.event_category.index',$data);
    }

    public function create(){
        return view('admin::event.event_category.create');
    }

    public function store(EventCategoryRequest $request)
    {
        $this->eventCategoryRepository->store($request->validated());
        return back()->with(['message' => 'Event category created successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['eventCategory'] = $this->eventCategoryRepository->edit($id);
        return view('admin::event.event_category.edit',$data);
    }

    public function update(EventCategoryRequest $request, $id)
    {
        $this->eventCategoryRepository->update($request->validated(), $id);
        return back()->with(['message' => 'Event category update successfully.']);
    }


    public function destroy($id)
    {
        $this->eventCategoryRepository->destroy($id);
        return back()->with(['message' => 'Event category update successfully.']);
    }
}
