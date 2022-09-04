<?php

namespace Modules\Admin\Http\Controllers\File_upload;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\FileUpload\FileUploadRequest;
use Modules\Admin\Repository\FileUpload\FileUploadCategoryRepository;
use Modules\Admin\Repository\FileUpload\FileUploadRepository;

class FileUploadController extends Controller
{
    private $FileUploadRepository;
    private $FileUploadCategoryRepository;

    public function __construct(FileUploadRepository $FileUploadRepository, FileUploadCategoryRepository $FileUploadCategoryRepository)
    {
        $this->FileUploadRepository = $FileUploadRepository;
        $this->FileUploadCategoryRepository = $FileUploadCategoryRepository;
    }

    public function index()
    {
        $data['list'] =  $this->FileUploadRepository->getFiles();
        return view('admin::file_upload.index',$data);
    }

    public function create(){
        $data['categories'] = $this->FileUploadCategoryRepository->getCategories();
        return view('admin::file_upload.create',$data);
    }

    public function store( FileUploadRequest $request )
    {
        $this->FileUploadRepository->store($request->validated());
        return back()->with(['message'=>'File create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['categories'] = $this->FileUploadCategoryRepository->getCategories();
        $data['files'] = $this->FileUploadRepository->getOne($id);
        return view('admin::file_upload.edit',$data);
    }

    public function update(FileUploadRequest $request, $id)
    {
        $this->FileUploadRepository->update($request->validated(), $id);
        return back()->with(['message'=>'File update successfully.']);
    }


    public function destroy($id)
    {
        $this->FileUploadRepository->destroy($id);
        return back()->with(['message'=>'File upload delete successfully.']);
    }
}
