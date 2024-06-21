<?php

namespace App\Models;

use App\Http\Traits\Api\Slugify;
use App\Filters\Service\ServiceFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Service extends Model
{
    use HasFactory, Filterable, Slugify;

    protected string $default_filters = ServiceFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'service_category_id',
        'specialization_id',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
    public function specialization()
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }

    public function mechanicals()
    {
        return $this->hasManyThrough(
            User::class,
            Mechanical::class,
            'specialization_id',           // Foreign key on Mechanical
            'id'               ,           // Foreign key on User
            'specialization_id',           // Local key on Service
                                'user_id'  // Local key on Mechanical
        );
    }



    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'service_tags');
    }
    public function getImageAttribute()
    {
        return asset(Storage::url($this->attributes['image']));
    }


    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_services');
    }
}
