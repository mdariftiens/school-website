<?php

namespace Modules\View\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{

    public function update(Request $request)
    {
        $session = [
            ''=>'en',
            'bn'=>'en',
            'en'=>'bn'
        ];

        $local = Session::get('lang')??'';

        Session::put('lang',$session[$local]);

        Session::save();

        return redirect()->route('home');
    }
}
