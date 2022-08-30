<?php

namespace Modules\Admin\Http\Controllers\Widgets;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Repository\Sidebar\SidebarRepository;
use Modules\Admin\Repository\Widgets\WidgetsRepository;

class WidgetsController extends Controller
{
    private $widgetsRepository;

    public function __construct(WidgetsRepository $widgetsRepository)
    {
        $this->widgetsRepository = $widgetsRepository;
    }

    public function index()
    {
        $data = [];
        $data['list'] = $this->widgetsRepository->getActiveWidgets();
        $data['widgetTypeList'] = $this->widgetsRepository->getWidgetType();
        return view('backend::widgets.index',$data);
    }

    public function create()
    {
        return view('backend::widgets.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'bangla_title' => 'required',
            'english_title' => 'required',
            'type' => 'required'
        ]);

        $this->widgetsRepository->createOrUpdate($request);

        return redirect()
            ->route('widgets.index')
            ->with(['message' => 'Widgets created!']);
    }

    public function show($id)
    {

    }

    public function edit($widgetId)
    {
        $data['widgetDetail'] = $this->widgetsRepository->getWidgetDetailData($widgetId);
        return view('backend::widgets.edit',$data);

    }

    public function update(Request $request, $widgetId)
    {
        $request->validate([
            'bangla_title' => 'required',
            'english_title' => 'required',
            'type' => 'required'
        ]);

        $this->widgetsRepository->createOrUpdate($request);
        return redirect()->route('widgets.index')
            ->with(['message'=>'Widget updated!']);
    }


    public function destroy($widgetId)
    {
        $this->widgetsRepository->delete($widgetId);
        return response()->json(['message' => 'deleted']);
    }
}
