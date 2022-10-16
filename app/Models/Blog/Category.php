<?php

namespace App\Models\Blog;

use App\Traits\HasMedia;
use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasMedia;

    const DRAFT = 'draft';
    const PUBLISHED = 'published';

    protected $table = 'categories';

    protected $fillable = [
        'bangla_title',
        'english_title',
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

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, PostCategory::class);
    }
}
