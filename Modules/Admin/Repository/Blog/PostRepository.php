<?php

namespace Modules\Admin\Repository\Blog;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\PostCategory;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class PostRepository
{
    public function getPosts()
    {
        return Post::paginate(20);
    }
    public function getCategory()
    {
        return Category::get();
    }

    public function postStore($request)
    {
      
        DB::transaction(function () use ($request) {

            $post = Post::create($request->validated());            

            foreach($request->category as $value){       
               PostCategory::create(['post_id'=>$post->id,'category_id'=>$value]);
            }  
            return $post;
       
        });
      
            
    }

    public function postEdit($id)
    {
        return Post::with('categories')->find($id);
    }  

    public function postUpdate($request, $id)
    {   
        DB::transaction(function () use ($request,$id) {

            $post = Post::findOrFail($id);
            $post->update($request->validated());  
            $categories = [];      
            $getCategory = PostCategory::where('post_id',$post->id)->get();           
            foreach($getCategory as $cat){
                $categories[] = $cat['category_id'];                             
            }  
            foreach($request->category as $cat){
                if(!in_array($cat,$categories)) {                   
                    PostCategory::create(['post_id'=>$post->id,'category_id'=>$cat]);
                }             
            }
            foreach($categories as $cat){               
                if(!in_array($cat,$request->category)) {                   
                   PostCategory::where('category_id',$cat)->forcedelete();
                }             
            }         
       
        });   
      
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
