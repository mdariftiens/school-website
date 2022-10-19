<?php

namespace Modules\Admin\Repository\Menu;

use App\Models\Achievements\Achievements;
use App\Models\Menu\MenuItems;
use App\Models\Menu\Menus;

class MenuRepository
{


    public function getMenu()
    {
        $menu = new Menus();
        $menuitems = new MenuItems();
        $menulist = Menus::select(['id', 'name'])->get();
        $menulist = $menulist->pluck('name', 'id')->prepend('Select menu', 0)->all();

        if ((request()->has("action") && empty(request()->input("menu"))) || request()->input("menu") == '0') {
            return view('admin::menu.menu')->with("menulist", $menulist);
        } else {

            $menu = Menus::find(request()->input("menu"));
            $menus = $menuitems->getall(request()->input("menu"));

            $data = ['menus' => $menus, 'indmenu' => $menu, 'menulist' => $menulist];
            return view('admin::menu.menu', $data);
        }
    }

    public function create_new_menu(){
        $menu = new Menus();
        $menu->name = request()->input("menuname");
        $menu->save();
        return json_encode(array("resp" => $menu->id));
    }

    public function delete_item_menu(){
        $menuitem = MenuItems::find(request()->input("id"));
        return $menuitem->delete();
    }

    public function delete_full_menu(){
        $menus = new MenuItems();
        $getall = $menus->getall(request()->input("id"));
        if (count($getall) == 0) {
            $menudelete = Menus::find(request()->input("id"));
            $menudelete->delete();
            return json_encode(array("resp" => "you delete this item"));
        } else {
            return json_encode(array("resp" => "You have to delete all items first", "error" => 1));
        }
    }

    public function update_menu_item(){
        $arraydata = request()->input("arraydata");
        if (is_array($arraydata)) {
            foreach ($arraydata as $value) {
                $menuitem = MenuItems::find($value['id']);
                $menuitem->english_label = $value['label'];
                $menuitem->bangla_label = $value['label_bangla'];
                $menuitem->link = $value['link'];
                $menuitem->class = $value['class'];
                $menuitem->save();
            }
        } else {
            $menuitem = MenuItems::find(request()->input("id"));
            $menuitem->label_english = request()->input("label");
            $menuitem->link = request()->input("url");
            $menuitem->class = request()->input("clases");
            $menuitem->save();
        }
    }

    public function add_custom_menu_item(){
        $menuitem = new MenuItems();
        $menuitem->english_label = request()->input("labelmenu");
        $menuitem->bangla_label = request()->input("labelmenubangla");
        $menuitem->link = request()->input("linkmenu");
        $menuitem->menu_id = request()->input("idmenu");
        $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        return $menuitem->save();
    }

    public function show_menu(){
        return MenuItems::with('childs')->where(['parent'=>0, 'deleted_at'=>null])->orderBy('label', 'asc')->get();
    }
}
