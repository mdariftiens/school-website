<?php

namespace Modules\Admin\Http\Requests\Notice;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required',
            'english_title' => 'required',
            'bangla_title' => 'required',
            'bangla_description' => 'nullable',
            'english_description' => 'nullable',
            'featured_image_link' => 'nullable',
            'thumbnail_image_link' => 'nullable',
            'published_date' => 'required',
            'is_ticker' => 'required',
            'ticker_link' => 'nullable',
            'is_published' => 'required',
            'is_featured' => 'nullable'
        ];
    }


}
