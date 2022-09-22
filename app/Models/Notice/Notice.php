<?php

namespace App\Models\Notice;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notice extends Model
{
    use HasFactory;
    use HasMedia;

    const IS_TICKER = 1;
    const IS_PUBLISHED = 1;

    protected $table = 'notice';

    protected $fillable = [
        'category_id',
        'bangla_title',
        'english_title',
        'bangla_description',
        'english_description',
        'is_published',
        'published_date',
        'featured_image_link',
        'is_ticker',
        'ticker_link',
        'is_featured'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(NoticeCategory::class);
    }

    public function scopeIsPublished($q){
        $q->where('is_published', self::IS_PUBLISHED);
    }
}
