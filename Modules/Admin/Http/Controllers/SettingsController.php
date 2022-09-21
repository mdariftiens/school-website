<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Option\Option;
use App\Models\Slider\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Repository\Slider\SliderRepository;

class SettingsController extends Controller
{

    public function create(Request $request, SliderRepository $sliderRepository)
    {
        $type = $request->section;
        $data ['type'] = $type;

        if ($type == 'slider')
        {
            $data ['sliders'] = Slider::get(['id','english_title','bangla_title']);
        }

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
