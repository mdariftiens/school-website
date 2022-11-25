<?php

namespace App\Models\Blog;

use App\Abstracts\Model;
use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

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
        'bangla_title',
        'english_title',
        'slug',
        'bangla_description',
        'english_description',
        'status',
        'type',
        'visibility',
    ];

    public function scopeVisibility($q, $type = 'private')
    {
        return $q->where('visibility', $type);
    }

    public function scopeType($q, $type = 'post')
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

    public function setEnglishTitleAttribute($title)
    {        
        $this->attributes['english_title'] = $title;
        $this->attributes['slug'] = $this->uniqueSlug($title);
        
    }
    private function uniqueSlug($title)
    {
        $slug = Str::slug($title);            
        $count = Post::where('english_title',$title)->count();        
        $newCount = $count > 0 ? ++$count : '';     
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }

}
