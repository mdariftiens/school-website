<?php

namespace Modules\View\Http\Controllers;

use App\Models\Gallery\Gallery;
use Modules\View\Abstracts\Controller;

class GalleryController extends Controller
{

    public function getDataRows()
    {
        return Gallery::with(['media'])
            ->where('is_publish', Gallery::PUBLISHED)
            ->orderBy('priority')
            ->latest()
            ->paginate();
    }

    public function getDataRow($id)
    {
        return Gallery::with(['media'])
            ->where('is_publish', Gallery::PUBLISHED)
            ->findOrFail($id);
    }
}
