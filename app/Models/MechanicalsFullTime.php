<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MechanicalsFullTime extends Model
{
    use HasFactory;

    protected $table='mechanicals_full_time';

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'mechanical_id','monthly_salary',
    ];


}
