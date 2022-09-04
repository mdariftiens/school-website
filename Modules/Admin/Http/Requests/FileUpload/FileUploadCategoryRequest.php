<?php

namespace Modules\Admin\Http\Requests\FileUpload;


use App\Abstracts\FormRequest;

class FileUploadCategoryRequest extends FormRequest
{

    public function rules()
    {
        return [
            'english_name' => 'required|unique:upload_file_category,english_name,'.$this->file_upload_category,
            'bangla_name' => 'required|unique:upload_file_category,bangla_name,'.$this->file_upload_category,
        ];
    }


}
