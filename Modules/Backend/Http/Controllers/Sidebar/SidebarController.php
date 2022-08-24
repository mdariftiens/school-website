<?php

namespace Modules\Backend\Http\Controllers\Sidebar;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Repository\Sidebar\SidebarRepository;
use Modules\Backend\Repository\Widgets\WidgetsRepository;

class SidebarController extends Controller
{

    public function index(
        WidgetsRepository $widgetsRepository,
        SidebarRepository $sidebarRepository,
        Request $request
    )
    {
        $sidebarId = $request->sidebarId;
        $data = [];

        $data['sidebarIdArray'] = $sidebarRepository->getSidebarList();

        if ($sidebarId)
        {
            $data['widgetsList'] = $widgetsRepository->getActiveWidgets();
            $data['sidebarWidgets'] = $widgetsRepository->getSidebarWidget($sidebarId);
        }
        return view('backend::sidebar.index',$data);
    }

    public function update(
        Request $request,
        SidebarRepository $sidebarRepository,
        $sidebarName
    )
    {
        $sidebarRepository->update($sidebarName, $request);

        return back()->with(['message' => 'Sidebar updated successfully.']);
    }

}
