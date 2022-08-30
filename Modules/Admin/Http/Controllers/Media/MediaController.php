<?php

namespace Modules\Admin\Http\Controllers\Media;

use App\Repository\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MediaController extends Controller
{
    private $mediaRepository;

    public function __construct(MediaRepository $mediaRepository)
    {
        $this->mediaRepository = $mediaRepository;
    }

    public function index()
    {
        $data = [];
        $data['list'] = $this->mediaRepository->getActiveWidgets();
        $data['widgetTypeList'] = $this->mediaRepository->getWidgetType();
        return view('backend::media.index',$data);
    }

    public function create()
    {
        return view('backend::media.create');
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
