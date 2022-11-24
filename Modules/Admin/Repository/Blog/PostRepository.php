<?php

namespace Modules\Admin\Repository\Blog;
use App\Models\Blog\Post;

class PostRepository
{
    public function getPosts()
    {
        return Post::paginate(20);
    }

    public function PostStore($validatedData)
    {
        return Post::create($validatedData);
    }

    public function PostEdit($id)
    {
        return Post::find($id);
    }
    public function PostDetail($id)
    {
        return Post::find($id);
    }

    public function PostUpdate($validatedData, $id)
    {
        return Post::find($id)->update($validatedData);

    }

    public function PostDestroy($id)
    {
        $post= Post::findOrfail($id);
        return $post->delete();
    }
}
