<?php

namespace Modules\View\Tests\Feature;

use App\Models\Blog\Post;
use Tests\TestCase;

class FeatureTestForBlogTest extends TestCase
{


    public function testList()
    {
        $this->get(route('blog.index'))
            ->assertOk();
    }

    public function testDetail()
    {
        $post = Post::with(['categories'])
            ->published()
            ->first();

        $this->get(route('blog.show', $post->slug))
            ->assertOk();
    }

    public function testPageDetail()
    {
        $post = Post::with(['categories'])
            ->published()
            ->visibility(Post::VISIBILITY_PUBLIC)
            ->type(Post::TYPE_PAGE)
            ->first();

        $this->get(route('blog.pageshow', $post->slug))
            ->assertOk();
    }

}
