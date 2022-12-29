<?php

namespace Modules\Admin\Http\Controllers\Blog;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Blog\PostRequest;
use Modules\Admin\Repository\Blog\PostRepository;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $data['list'] = $this->postRepository->getPosts();
        return view('admin::blog.post.index',$data);
    }

    public function create(){
        $data['list'] = $this->postRepository->getCategory();
        return view('admin::blog.post.create',$data);
    }

    public function store(PostRequest $request)
    {    
          
        $this->postRepository->postStore($request);
        return redirect()->route('blog.post.index')->with(['message'=>'Post created successfully.']);
    }

    public function edit($id)
    {
        $data['categories'] = $this->postRepository->getCategory();
        $data['row'] = $this->postRepository->postEdit($id);
        return view('admin::blog.post.edit',$data);
    }

    public function update(PostRequest $request, $id)
    {
        $this->postRepository->postUpdate($request, $id);
        return redirect()->route('blog.post.index')->with(['message'=>'Post update successfully.']);
    }

    public function destroy($id)
    {
        $this->postRepository->postDestroy($id);
        return back()->with(['message'=>'Post deleted successfully.']);
    }
}
