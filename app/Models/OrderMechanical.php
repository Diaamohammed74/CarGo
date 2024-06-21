<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderMechanical extends Model
{
    use HasFactory;

    

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'mechanical_id','order_id'
    ];


}
