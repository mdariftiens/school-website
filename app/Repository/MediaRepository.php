<?php

namespace App\Repository;

use App\Abstracts\Repository;
use App\Models\Media\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaRepository extends Repository
{
    public function uploadMedia(Request $request)
    {
        $uploadedFile = $request->file('file');

        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'files/'.$filename,
            $uploadedFile,
            $filename
        );

    }

    public function getMediaList()
    {
        return Media::paginate($this->getPerPage());
    }

    public function getMediaType()
    {
        return Media::select(['mimetypes'])->get()->pluck('mimetypes')->unique();
    }


}
