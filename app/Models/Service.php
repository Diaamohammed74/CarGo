<?php

namespace App\Models;

use App\Filters\Service\ServiceFilters;
use App\Http\Traits\Api\Slugify;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory, Filterable,Slugify;

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

    public function category(){
        return $this->belongsTo(ServiceCategory::class,'service_category_id');
    }
    public function specialization(){
        return $this->belongsTo(Specialization::class,'specialization_id');
    }

    public function mechanicals()
    {
        return $this->hasManyThrough(
            User::class,
            Mechanical::class,
            'specialization_id',           // Foreign key on Mechanical
            'id'               ,           // Foreign key on User
            'specialization_id',           // Local key on Service
            'user_id'                      // Local key on Mechanical
        );
    }



    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'service_tags');
    }
}
