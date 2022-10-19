<?php

namespace App\Models\Blog;

use App\Traits\HasMedia;
use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Post extends Model
{
    use HasMedia;

    const DRAFT = 'draft';
    const PUBLISHED = 'published';

    const TYPE_POST = 'post';
    const TYPE_PAGE = 'page';

    const VISIBILITY_PUBLIC = 'public';
    const VISIBILITY_PRIVATE = 'private';

    protected $table = 'posts';

    protected $fillable = [
        'featured_image_link',
        'bangla_title',
        'english_title',
        'slug',
        'bangla_description',
        'english_description',
        'status',
        'type',
        'visibility',
    ];


    public function scopeType($q, $type='post')
    {
        return $q->where('type', $type);
    }

    public function scopePublished($q)
    {
        return $q->where('status', self::PUBLISHED);
    }

    public function scopeDraft($q)
    {
        return $q->where('status', self::DRAFT);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, PostCategory::class);
    }
}
