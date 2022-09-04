<?php

namespace Modules\Admin\Http\Controllers\notice;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Notice\NoticeRequest;
use Modules\Admin\Repository\Notice\NoticeCategoryRepository;
use Modules\Admin\Repository\Notice\NoticeRepository;

class NoticeController extends Controller
{
    private $noticeRepository;
    private $noticeCategoryRepository;

    public function __construct(NoticeRepository $noticeRepository, NoticeCategoryRepository $noticeCategoryRepository)
    {
        $this->noticeRepository = $noticeRepository;
        $this->noticeCategoryRepository = $noticeCategoryRepository;
    }

    public function index()
    {
        $data['list'] =  $this->noticeRepository->getNotice();
        return view('admin::notice.index',$data);
    }

    public function create(){
        $data['categories'] = $this->noticeCategoryRepository->getCategories();
        return view('admin::notice.create',$data);
    }

    public function store( NoticeRequest $request )
    {
        $this->noticeRepository->store($request->validated());
        return back()->with(['message'=>'Notice create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['categories'] = $this->noticeCategoryRepository->getCategories();
        $data['notice'] = $this->noticeRepository->getOne($id);
        return view('admin::notice.edit',$data);
    }

    public function update(NoticeRequest $request, $id)
    {
        $this->noticeRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Notice update successfully.']);
    }


    public function destroy($id)
    {
        $this->noticeRepository->destroy($id);
        return back()->with(['message'=>'Notice delete successfully.']);
    }
}
