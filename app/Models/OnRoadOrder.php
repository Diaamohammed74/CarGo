<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OnRoadOrder extends Model
{
    use HasFactory;

    

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'order_id','longitude','latitude'
    ];


}
