<?php

namespace Modules\Admin\Http\Controllers\File_upload;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\FileUpload\FileUploadCategoryRequest;
use Modules\Admin\Repository\FileUpload\FileUploadCategoryRepository;

class FileUploadCategoryController extends Controller
{
    private $fileUploadCategoryRepository;

    public function __construct(FileUploadCategoryRepository $fileUploadCategoryRepository)
    {
        $this->fileUploadCategoryRepository = $fileUploadCategoryRepository;
    }

    public function index()
    {
        $data['list'] = $this->fileUploadCategoryRepository->getCategories();
        return view('admin::file_upload.file_upload_category.index',$data);
    }

    public function create(){
        return view('admin::file_upload.file_upload_category.create');
    }

    public function store(FileUploadCategoryRequest $request)
    {
        $this->fileUploadCategoryRepository->store($request->validated());
        return back()->with(['message'=>'File category created successfully.']);
    }


    public function edit($id)
    {
        $data['category'] = $this->fileUploadCategoryRepository->getOne($id);
        return view('admin::file_upload.file_upload_category.edit',$data);
    }

    public function update(FileUploadCategoryRequest $request, $id)
    {
        $this->fileUploadCategoryRepository->update($request->validated(), $id);
        return back()->with(['message'=>'File category update successfully.']);
    }


    public function destroy($id)
    {
        $this->fileUploadCategoryRepository->destroy($id);
        return back()->with(['message'=>'File category update successfully.']);
    }
}
