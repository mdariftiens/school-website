<?php

namespace Modules\Admin\Http\Controllers\Widgets;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WidgetsSaveActionController extends Controller
{
    public function adminSave(Request $request)
    {
        $validatedFields = $request->validate([
            'type'=>'required',
            'name'=>'required',
            'fields'=>'array|required',
        ]);

    }

    public function generalSave(Request $request)
    {
        $validatedFields = $request->validate([
            'type'=>'required',
            'name'=>'required',
            'fields'=>'array|required',
        ]);
    }

}
