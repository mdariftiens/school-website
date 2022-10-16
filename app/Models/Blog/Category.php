<?php

namespace App\Models\Blog;

use App\Traits\HasMedia;
use App\Abstracts\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
