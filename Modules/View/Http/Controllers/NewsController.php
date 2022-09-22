<?php

namespace Modules\View\Http\Controllers;

use App\Models\Message\Message;
use App\Models\News\News;
use Modules\View\Abstracts\Controller;

class NewsController extends Controller
{

    public function getDataRows()
    {
        return News::latest()->paginate();
    }

    public function getDataRow($id)
    {
        return News::findOrFail($id);
    }
}
