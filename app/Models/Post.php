<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaColections()
    {
        $this->addMediaCollection('images')
            ->singleFile();
        $this->addMediaCollection('downloads')
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }


    protected $fillable = ['title','description','user_id','publish', 'meta_description', 'meta_title', 'image', 'tag', 'slug'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function comments()
    {
       return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
