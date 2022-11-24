<?php

namespace Modules\Admin\Http\Controllers\Blog;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Blog\PostRequest;
use Modules\Admin\Repository\Blog\PostRepository;

class PostController extends Controller
{
    private $PostRepository;

    public function __construct(PostRepository $PostRepository)
    {
        $this->PostRepository = $PostRepository;
    }

    public function index()
    {
        $data['list'] = $this->PostRepository->getPosts();
        return view('admin::blog.post.index',$data);
    }

    public function create(){
        return view('admin::blog.post.create');
    }

    public function store(PostRequest $request)
    {        
        $this->PostRepository->PostStore($request->validated());
        return redirect()->route('blog.post.index')->with(['message'=>'Post created successfully.']);
    }

    public function show($id)
    {
        $data['row'] = $this->PostRepository->PostDetail($id);
        return view('admin::blog.post.detail',$data);
    }

    public function edit($id)
    {
        $data['row'] = $this->PostRepository->PostEdit($id);
        return view('admin::blog.post.edit',$data);
    }

    public function update(PostRequest $request, $id)
    {
        $this->PostRepository->PostUpdate($request->validated(), $id);
        return redirect()->route('blog.post.index')->with(['message'=>'Post update successfully.']);
    }

    public function destroy($id)
    {
        $this->PostRepository->PostDestroy($id);
        return back()->with(['message'=>'Post deleted successfully.']);
    }
}
