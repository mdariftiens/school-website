<?php

namespace Modules\Admin\Http\Controllers\News;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\News\NewsRequest;
use Modules\Admin\Repository\News\NewsRepository;

class NewsController extends Controller
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        $data['list'] =  $this->newsRepository->getList();
        return view('admin::news.index',$data);
    }

    public function create(){
        return view('admin::news.create');
    }

    public function store( NewsRequest $request )
    {
        $this->newsRepository->store($request->validated());
        return redirect()->route('news.index')->with(['message'=>'Data create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->newsRepository->getOne($id);
        return view('admin::news.edit',$data);
    }

    public function update( NewsRequest $request, $id)
    {
        $this->newsRepository->update($request->validated(), $id);
        return redirect()->route('news.index')->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->newsRepository->destroy($id);
        return back()->with(['message'=>'Data delete successfully.']);
    }
}
