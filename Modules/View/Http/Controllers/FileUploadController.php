<?php

namespace Modules\View\Http\Controllers;

use App\Models\Event\Event;
use App\Models\FileUpload\FileUpload;
use Modules\View\Abstracts\Controller;

class FileUploadController extends Controller
{

    public function getDataRows()
    {
        return FileUpload::with(['category'])
            ->withCount('media')
            ->where('is_publish', FileUpload::PUBLISHED)
            ->latest()
            ->paginate();
    }

    public function getDataRow($id)
    {
        return FileUpload::with(['media','category'])
            ->where('is_publish', FileUpload::PUBLISHED)
            ->findOrFail($id);
    }
}
