<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MechanicalSpecialization extends Model
{
    use HasFactory;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $primaryKey = ['mechanical_id', 'specialization_id'];

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'mechanical_id', 'specialization_id'  // Fixed typo here
    ];
}
