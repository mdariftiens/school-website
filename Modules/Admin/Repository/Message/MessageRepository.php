<?php

namespace Modules\Admin\Repository\Message;

use App\Models\Message\Message;


class MessageRepository
{
    public function getList()
    {
        return Message::get();
    }

    public function getOne($id)
    {
        return Message::find($id);
    }

    public function store($validatedData)
    {
        return Message::create($validatedData);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return Message::find($id);
    }

    public function update($validatedData, $id)
    {
        return Message::find($id)->update($validatedData);

    }

    public function destroy($id)
    {
        $result = Message::findOrFail($id);
        return $result->delete();
    }
}
