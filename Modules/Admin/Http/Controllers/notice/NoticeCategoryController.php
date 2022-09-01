<?php

namespace Modules\Admin\Http\Controllers\notice;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Notice\NoticeCategoryRequest;
use Modules\Admin\Repository\Notice\NoticeCategoryRepository;

class NoticeCategoryController extends Controller
{
    private $noticeCategoryRepository;

    public function __construct(NoticeCategoryRepository $noticeCategoryRepository)
    {
        $this->noticeCategoryRepository = $noticeCategoryRepository;
    }

    public function index()
    {
        $data['list'] = $this->noticeCategoryRepository->getCategories();
        return view('admin::notice.notice_category.index',$data);
    }

    public function create(){
        return view('admin::notice.notice_category.create');
    }

    public function store(NoticeCategoryRequest $request)
    {
        $this->noticeCategoryRepository->store($request->validated());
        return back()->with(['message'=>'Notice category created successfully.']);
    }


    public function edit($id)
    {
        $data['category'] = $this->noticeCategoryRepository->getOne($id);
        return view('admin::notice.notice_category.edit',$data);
    }

    public function update(NoticeCategoryRequest $request, $id)
    {
        $this->noticeCategoryRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Notice category update successfully.']);
    }


    public function destroy($id)
    {
        $this->noticeCategoryRepository->destroy($id);
        return back()->with(['message'=>'Notice category update successfully.']);
    }
}
