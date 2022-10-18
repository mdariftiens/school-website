<?php

namespace Modules\View\Tests\Feature;

use App\Models\Blog\Post;
use App\Models\Event\Event;
use App\Models\Notice\Notice;
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

}
