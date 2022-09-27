<?php
namespace Modules\View\View\Components;
use App\Models\Menu\MenuItems;
use Illuminate\View\Component;

class MenuComponent extends Component
{
    public $menus;

    public function __construct()
    {
        $this->menus = MenuItems::with('childs')
            ->where('parent',0)
            ->orderBy('label', 'asc')
            ->get();
    }

    public function render()
    {
        return view('view::components.menucomponent');
    }
}
