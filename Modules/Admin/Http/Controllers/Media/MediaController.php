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
        $data['list'] = $this->mediaRepository->getMediaList();
        $data['mediaTypeList'] = $this->mediaRepository->getMediaType();

        return view('admin::media.index',$data);
    }


    public function store(Request $request)
    {

        $request->validate([
            'bangla_title' => 'required',
            'english_title' => 'required',
            'type' => 'required'
        ]);
    }

    public function show($id)
    {

    }

    public function edit($widgetId)
    {

    }

    public function update(Request $request, $widgetId)
    {

    }


    public function destroy($widgetId)
    {
        return response()->json(['message' => 'deleted']);
    }
}
