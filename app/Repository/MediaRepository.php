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
        $fileExtension = last(explode(".",$uploadedFile));

        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/files/'.$filename,
            $uploadedFile,
            $filename
        );
        $location = 'public/files/'.$filename.'/'.$filename;
        $fileSize = Storage::disk('local')->size($location);
        $diskLocation = storage_path('app/public/'.$location);
        $url = $request->getHttpHost() . '/' .'storage/files/'.$filename.'/'.$filename;

        Media::create([
            'bangla_title' => $filename,
            'english_title' => $filename,
            'bangla_alt_text' => $filename,
            'english_alt_text' => $filename,
            'filename' => $filename,
            'mimetypes' => $fileExtension,
            'extension' =>$fileExtension,
            'size' => $fileSize,
            'disk_location' => $diskLocation,
            'url' => $url,
        ]);

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
