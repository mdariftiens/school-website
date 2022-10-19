<?php

namespace Modules\View\Http\Controllers;


use App\Models\Blog\Post;
use Modules\View\Abstracts\Controller;

class PageController extends Controller
{
    public function getDataRows()
    {

    }

    public function getDataRow($id)
    {
        return  Post::with(['categories'])
        ->published()
        ->visibility(Post::VISIBILITY_PUBLIC)
        ->type(Post::TYPE_PAGE)
        ->where('slug', $id)
        ->firstOrFail();
    }

}
