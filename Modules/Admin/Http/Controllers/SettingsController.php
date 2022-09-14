<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Option\Option;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingsController extends Controller
{

    public function create(Request $request)
    {
        $data ['type'] = $request->section;

        return view('admin::settings.create', $data);
    }

    public function store(Request $request)
    {
        $deletedNameArray = array_keys($request->except('_token'));
        Option::whereIn('name',$deletedNameArray)->forceDelete();

        foreach ($request->except('_token') as $name => $value){
            Option::create([
                'name' => $name,
                'value' => $value
            ]);
        }

        return back()->with(['message' => 'Updated Successfully']);
    }

}
