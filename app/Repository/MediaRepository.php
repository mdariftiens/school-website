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

        $originalName = $uploadedFile->getClientOriginalName();
        $filename = time().$uploadedFile->getClientOriginalName();
        $fileExtension = last(explode(".",$filename));

        Storage::disk('local')->putFileAs(
            'public/files/'.$filename,
            $uploadedFile,
            $filename
        );
        $location = 'public/files/'.$filename.'/'.$filename;
        $fileSize = Storage::disk('local')->size($location);
        $diskLocation = storage_path('app/public/'.$location);
        $url = $request->getSchemeAndHttpHost() . '/' .'storage/files/'.$filename.'/'.$filename;

        Media::create([
            'bangla_title' => $originalName,
            'english_title' => $originalName,
            'bangla_alt_text' => $originalName,
            'english_alt_text' => $originalName,
            'filename' => $originalName,
            'mimetypes' => $fileExtension,
            'extension' =>$fileExtension,
            'size' => $fileSize,
            'disk_location' => $diskLocation,
            'url' => $url,
        ]);

    }

    public function getMediaList()
    {
        return Media::paginate(1);
//        return Media::paginate($this->getPerPage());
    }

    public function getMediaType()
    {
        return Media::select(['extension'])->get()->pluck('extension')->unique();
    }


}
