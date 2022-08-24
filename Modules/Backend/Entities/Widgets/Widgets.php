<?php

namespace Modules\Backend\Entities\Widgets;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Backend\Abstracts\BackendModel;

class Widgets extends BackendModel
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
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
