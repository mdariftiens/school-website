<?php

namespace Modules\Admin\Http\Controllers\Message;

use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Slider\MessageRequest;
use Modules\Admin\Repository\Message\MessageRepository;


class MessageController extends Controller
{
    private $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function index()
    {
        $data['list'] =  $this->messageRepository->getList();
        return view('admin::message.index',$data);
    }

    public function create(){
        return view('admin::message.create');
    }

    public function store( MessageRequest $request )
    {
        $this->messageRepository->store($request->validated());
        return back()->with(['message'=>'Message create successfully.']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data['row'] = $this->messageRepository->getOne($id);
        return view('admin::message.edit',$data);
    }

    public function update( MessageRequest $request, $id)
    {
        $this->messageRepository->update($request->validated(), $id);
        return back()->with(['message'=>'Message update successfully.']);
    }


    public function destroy($id)
    {
        $this->messageRepository->destroy($id);
        return back()->with(['message'=>'Message delete successfully.']);
    }
}
