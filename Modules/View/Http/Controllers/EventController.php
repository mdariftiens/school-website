<?php

namespace Modules\View\Http\Controllers;

use App\Models\Event\Event;
use Modules\View\Abstracts\Controller;

class EventController extends Controller
{

    public function getDataRows()
    {
        return Event::with(['category'])
            ->where('is_published', Event::PUBLISHED)
            ->paginate();
    }

    public function getDataRow($id)
    {
        return Event::with(['category'])->findOrFail($id);
    }
}
