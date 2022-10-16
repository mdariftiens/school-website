<?php

namespace App\Models\Blog;

use App\Traits\HasMedia;
use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasMedia;

    const DRAFT = 'draft';
    const PUBLISHED = 'published';

    protected $table = 'posts';

    protected $fillable = [
        'featured_image_link',
        'bangla_title',
        'english_title',
        'slug',
        'bangla_description',
        'english_description',
        'status',
    ];


    public function scopePublished($q)
    {
        return $q->where('status', self::PUBLISHED);
    }

    public function scopeDraft($q)
    {
        return $q->where('status', self::DRAFT);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
