<?php

namespace Modules\Admin\Http\Controllers\Sidebar;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Repository\Sidebar\SidebarRepository;
use Modules\Admin\Repository\Widgets\WidgetsRepository;

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
        return view('admin::sidebar.index',$data);
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
