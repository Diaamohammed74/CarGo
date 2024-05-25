<?php

namespace App\Models;

use App\Http\Traits\Api\Slugify;
use App\Filters\Video\VideoFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Video extends Model
{
    use HasFactory, Filterable,Slugify;

    protected string $default_filters = VideoFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'video_category_id',
        'video'
    ];

    public function category(){
        return $this->belongsTo(VideoCategory::class,'video_category_id');
    }
    public function getVideoAttribute()
    {
        return asset(Storage::url($this->attributes['video']));
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'video_tags');
    }

}
