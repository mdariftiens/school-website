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
            'public/files/'.date("Y-m-d"),
            $uploadedFile,
            $filename
        );

        $location = 'public/files/'.date("Y-m-d").'/'.$filename;
        $fileSize = Storage::disk('local')->size($location);
        $diskLocation = storage_path('app/'.$location);
        $url = $request->getSchemeAndHttpHost() . '/' .'storage/files/'.date("Y-m-d").'/'.$filename;

        return Media::create([
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
        return Media::latest()->paginate($this->getPerPage());
    }

    public function getMediaType()
    {
        return Media::select(['extension'])->get()->pluck('extension')->unique();
    }

    public function delete($mediaId)
    {
        $media = Media::findOrFail($mediaId);
        $this->deleteFileFromSystemIfLocalFile($media);
        $media->delete();
    }

    private function deleteFileFromSystemIfLocalFile( Media $media){
        if(file_exists($media->diskLocation)){
            @unlink($media->diskLocation);
        }
    }

}
