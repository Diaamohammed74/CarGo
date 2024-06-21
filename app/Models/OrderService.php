<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderService extends Model
{
    use HasFactory;

    

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'service_id', 'order_id'
    ];


}
