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

    public function index(Request $request)
    {
        $data = [];
        $data['list'] = $this->mediaRepository->getMediaList();
        $data['mediaTypeList'] = $this->mediaRepository->getMediaType();

       if($request->ajax()){
            return $data['list'];
        }

        return view('admin::media.index',$data);
    }


    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required',
        ]);

        $this->mediaRepository->uploadMedia($request);

        return response()->json('uploaded');
    }

    public function show($id)
    {

    }

    public function edit($widgetId)
    {

    }

    public function update(Request $request, $mediaId)
    {

    }


    public function destroy($mediaId)
    {
        $this->mediaRepository->delete($mediaId);
        return response()->json(['message' => 'deleted']);
    }
}
