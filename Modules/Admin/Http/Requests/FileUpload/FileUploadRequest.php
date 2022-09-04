<?php

namespace Modules\Admin\Http\Requests\FileUpload;


use App\Abstracts\FormRequest;

class FileUploadRequest extends FormRequest
{

    public function rules()
    {
        return [
            'category_id' => 'required',
            'english_title' => 'required',
            'bangla_title' => 'required',
            'is_publish' => '',
        ];
    }


}
