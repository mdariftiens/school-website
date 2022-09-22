<?php

namespace Modules\View\Http\Controllers;

use App\Models\Message\Message;
use Modules\View\Abstracts\Controller;

class MessageController extends Controller
{

    public function getDataRows()
    {
        return Message::orderBy('priority')->paginate();
    }

    public function getDataRow($id)
    {
        return Message::findOrFail($id);
    }
}
