<?php

namespace Modules\Admin\Http\Controllers\Blog;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Blog\CategoryRequest;
use Modules\Admin\Repository\Blog\CategoryRepository;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data['list'] =  $this->categoryRepository->getList();
        return view('admin::blog.category.index',$data);
    }

    public function create(){
        return view('admin::blog.category.create');
    }

    public function store( CategoryRequest $request )
    {
        $this->categoryRepository->store($request->validated());
        return redirect()->route('blog.category.index')->with(['message'=>'Data create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->categoryRepository->getOne($id);
        return view('admin::blog.category.edit',$data);
    }

    public function update( CategoryRequest $request, $id)
    {
        $this->categoryRepository->update($request->validated(), $id);
        return redirect()->route('blog.category.index')->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->categoryRepository->destroy($id);
        return back()->with(['message'=>'Data delete successfully.']);
    }
}
