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

    public function PostStore($validatedData)
    {
        // if($this->isSlugExists($validatedData['english_title'])){
        //     session()->flash('message', 'Slug Already Exist.');
        //     return redirect()->back()->with('message','Action completed Successfully');
        //     // dd('not exits');            
        // }
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
    
    public function isSlugExists($englishTitle)
    {
        return Post::where('slug', 'LIKE', Str::slug($englishTitle))->exists();
    }
}
