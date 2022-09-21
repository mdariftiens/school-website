<?php

namespace Modules\Admin\Http\Controllers\Achievement;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Achievement\AchievementRequest;
use Modules\Admin\Repository\Achievement\AchievementRepository;

class AchievementController extends Controller
{
    private $achievementRepository;

    public function __construct(AchievementRepository $achievementRepository)
    {
        $this->achievementRepository = $achievementRepository;
    }

    public function index()
    {
        $data['list'] =  $this->achievementRepository->getList();
        return view('admin::achievement.index',$data);
    }

    public function create(){
        return view('admin::achievement.create');
    }

    public function store( AchievementRequest $request )
    {
        $this->achievementRepository->store($request->validated());
        return redirect()->route('achievements.index')->with(['message'=>'Data create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->achievementRepository->getOne($id);
        return view('admin::achievement.edit',$data);
    }

    public function update( AchievementRequest $request, $id)
    {
        $this->achievementRepository->update($request->validated(), $id);
        return redirect()->route('achievements.index')->with(['message'=>'Data update successfully.']);
    }


    public function destroy($id)
    {
        $this->achievementRepository->destroy($id);
        return back()->with(['message'=>'Data delete successfully.']);
    }
}
