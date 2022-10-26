<?php

namespace Modules\View\Tests\Feature;

use Tests\BaseTestCase;

class FeatureTestForContactUsTest extends BaseTestCase
{


    public function testList()
    {
        $this->get(route('contact-us.index'))
            ->assertSee('name');
    }

    public function testSubmitContactUs()
    {
        $data = [
            'name' => 'name',
            'email' => 'email@email.com',
            'phone' => 'phone',
            'subject' => 'subject',
            'message' => 'message',
        ];

        $this->post(route('contact-us.store', $data))
            ->assertSessionHas('message');
        $this->assertDatabaseHas('contactus', $data);
    }

}
