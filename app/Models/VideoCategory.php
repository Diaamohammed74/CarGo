<?php

namespace App\Models;

use App\Http\Traits\Api\Slugify;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use App\Filters\VideoCategory\VideoCategoryFilters;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class VideoCategory extends Model
{
    use HasFactory, Filterable,Slugify;

    protected string $default_filters = VideoCategoryFilters::class;

    protected $fillable = [
        'title'
    ];
    public function videos()
    {
        return $this->hasMany(Video::class, 'video_id');
    }

}
