<?php

namespace Modules\View\Http\Controllers;


use App\Models\Blog\Post;
use Modules\View\Abstracts\Controller;

class PostController extends Controller
{
    public function getDataRows()
    {
        return Post::with(['categories'])
            ->type(Post::TYPE_POST)
            ->published()
            ->latest()
            ->paginate();
    }

    public function getDataRow($id)
    {
        return  Post::with(['categories'])
        ->published()
        ->where('slug', $id)
        ->firstOrFail();
    }

}
