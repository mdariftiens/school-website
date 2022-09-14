<?php

namespace Modules\Admin\Tests\Feature;

use Modules\Admin\Entities\Widgets\Widgets;
use Tests\TestCase;

class FeatureTestForManageSidebarWidgetsTest extends TestCase
{

    public function testCanShow()
    {
        $this->get('admin/manage-sidebar-widgets')
            ->assertOk();
    }
    public function testCanUpdateSidebar()
    {

        $this->post('admin/sidebar/home-right-sidebar',[
            'widget_id' => [1,3]
        ])
        ->assertSessionHas('message');
    }

    public function testCanSeeWidgedBarOnSidebarSelect()
    {
        $this->get('admin/manage-sidebar-widgets?sidebarId=home-right-sidebar')
        ->assertSee(Widgets::find(1)->bangla_title);
    }

}
