<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VideoTag extends Model
{
    use HasFactory;

    

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'video_id','tag_id'
    ];


    public function videos()
    {
        return $this->belongsToMany(Video::class, 'video_tags');
    }


}
