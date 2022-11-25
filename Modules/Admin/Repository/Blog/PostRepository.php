<?php

namespace Modules\Admin\Repository\Blog;
use App\Models\Blog\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;


class PostRepository
{
    public function getPosts()
    {
        return Post::paginate(20);
    }

    public function postStore($validatedData)
    {
        return Post::create($validatedData);        
    }

    public function postEdit($id)
    {
        return Post::find($id);
    }  

    public function postUpdate($validatedData, $id)
    {      
        return Post::find($id)->update($validatedData);
    }

    public function postDestroy($id)
    {
        $post= Post::findOrfail($id);
        return $post->delete();
    }
    
    public function isSlugExists($englishTitle)
    {
        return Post::where('slug', 'LIKE', Str::slug($englishTitle))->exists();
    }
}
