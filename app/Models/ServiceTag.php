<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServiceTag extends Model
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


    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_tags');
    }

}
