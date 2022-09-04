<?php

namespace Modules\Admin\Http\Controllers\Slider;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Slider\SliderRequest;
use Modules\Admin\Repository\Slider\SliderRepository;

class SliderController extends Controller
{
    private $SliderRepository;

    public function __construct(SliderRepository $SliderRepository)
    {
        $this->SliderRepository = $SliderRepository;
    }

    public function index()
    {
        $data['list'] =  $this->SliderRepository->getList();
        return view('admin::slider.index',$data);
    }

    public function create(){
        return view('admin::slider.create');
    }

    public function store( SliderRequest $request )
    {
        dd($request->validated());
//        $this->SliderRepository->store($request->validated());
//        return back()->with(['message'=>'Slider create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->SliderRepository->getOne($id);
        return view('admin::slider.edit',$data);
    }

    public function update(SliderRequest $request, $id)
    {
        $this->SliderRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Slider update successfully.']);
    }


    public function destroy($id)
    {
        $this->SliderRepository->destroy($id);
        return back()->with(['message'=>'Slider delete successfully.']);
    }
}
