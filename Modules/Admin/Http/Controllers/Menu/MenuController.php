<?php

namespace Modules\Admin\Http\Controllers\Menu;

use App\Models\Menu\Menus;
use App\Models\Menu\MenuItems;
use Illuminate\Routing\Controller;
use Modules\Admin\Repository\Menu\MenuRepository;

class MenuController extends Controller
{
    private $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function index()
    {
        return $this->menuRepository->getMenu();
    }

    public function CreateNewMenu()
    {
        return $this->menuRepository->create_new_menu();
    }

    public function Deleteitemmenu()
    {
        return $this->menuRepository->delete_item_menu();
    }

    public function DeleteFullMenu()
    {
        return $this->menuRepository->delete_full_menu();
    }

    public function UpdateMenuItem()
    {
        return $this->menuRepository->update_menu_item();
    }

    public function AddCustomMenuItem()
    {
        return $this->menuRepository->add_custom_menu_item();
    }

    public function GenerateMenuControl()
    {
        $menu = Menus::find(request()->input("idmenu"));
        $menu->name = request()->input("menuname");

        $menu->save();
        if (is_array(request()->input("arraydata"))) {
            foreach (request()->input("arraydata") as $value) {

                $menuitem = MenuItems::find($value["id"]);
                $menuitem->parent = $value["parent"];
                $menuitem->sort = $value["sort"];
                $menuitem->depth = $value["depth"];
                if (config('menu.use_roles')) {
                    $menuitem->role_id = request()->input("role_id");
                }
                $menuitem->save();
            }
        }
        echo json_encode(array("resp" => 1));

    }

    public function showMenu()
    {
        $data['menus'] = $this->menuRepository->show_menu();
        return view('admin::menu.index', $data);
    }
}
