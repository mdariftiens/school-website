<?php

namespace Modules\Admin\Entities\Widgets;

use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Widgets extends Model
{

    protected $fillable = [
        'type',
        'bangla_title',
        'english_title',
        'header_show_hide',
        'use_theme_default_style',
        'header_template',
        'header_background_color',
        'header_text_color',
        'header_hover_color',
        'content_background_color',
        'content_text_color',
        'content_hover_color',
    ];

    public function widgetFields(): HasMany
    {
        return $this->hasMany(WidgetFields::class, 'widget_id','id');
    }
}
