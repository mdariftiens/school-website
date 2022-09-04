<?php

namespace Modules\Admin\Http\Controllers\Gallery;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Gallary\GalleryRequest;
use Modules\Admin\Repository\Gallery\GalleryRepository;

class GalleryController extends Controller
{
    private $GalleryRepository;

    public function __construct(GalleryRepository $GalleryRepository)
    {
        $this->GalleryRepository = $GalleryRepository;
    }

    public function index()
    {
        $data['list'] =  $this->GalleryRepository->getFiles();
        return view('admin::gallery.index',$data);
    }

    public function create(){
        return view('admin::gallery.create');
    }

    public function store( GalleryRequest $request )
    {
        $this->GalleryRepository->store($request->validated());
        return back()->with(['message'=>'Gallery create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->GalleryRepository->getOne($id);
        return view('admin::gallery.edit',$data);
    }

    public function update(GalleryRequest $request, $id)
    {
        $this->GalleryRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Gallery update successfully.']);
    }


    public function destroy($id)
    {
        $this->GalleryRepository->destroy($id);
        return back()->with(['message'=>'Gallery delete successfully.']);
    }
}
