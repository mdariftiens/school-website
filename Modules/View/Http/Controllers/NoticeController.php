<?php

namespace Modules\View\Http\Controllers;

use App\Models\Notice\Notice;
use Illuminate\Http\Request;
use Modules\View\Abstracts\Controller;

class NoticeController extends Controller
{

    public function getDataRows()
    {
        return Notice::with('category')->isPublished()->paginate();
    }

    public function getDataRow($id)
    {
       return Notice::with('category')->isPublished()->findOrFail($id);
    }
}
