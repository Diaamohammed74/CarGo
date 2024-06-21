<?php

namespace App\Models;

use App\Filters\Specialization\SpecializationFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Specialization extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = SpecializationFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

public function mechanicals(){
    return $this->hasMany(Mechanical::class,'specialization_id');
}
}
