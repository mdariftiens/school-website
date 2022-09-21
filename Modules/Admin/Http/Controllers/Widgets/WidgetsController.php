<?php

namespace Modules\Admin\Http\Controllers\Widgets;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Classes\Themes;
use Modules\Backend\Repository\Sidebar\SidebarRepository;
use Modules\Admin\Repository\Widgets\WidgetsRepository;

class WidgetsController extends Controller
{
    private $widgetsRepository;

    public function __construct(WidgetsRepository $widgetsRepository, Themes $theme)
    {
        $this->widgetsRepository = $widgetsRepository;
        $this->theme = $theme;
    }

    public function index()
    {
        $data = [];
        $data['list'] = $this->widgetsRepository->getActiveWidgets();
        $data['widgetTypeList'] = $this->widgetsRepository->getWidgetType();
        return view('admin::widgets.index',$data);
    }

    public function create()
    {
        $data['templates'] = $this->theme->getWidgetTemplateList(\request()->widgetType);

        return view('admin::widgets.create',$data);
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
        $widgetDetail = $this->widgetsRepository->getWidgetDetailData($widgetId);
        $data['templates'] = $this->theme->getWidgetTemplateList($widgetDetail->type);
        $data['widgetDetail'] = $widgetDetail;
        return view('admin::widgets.edit',$data);

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
