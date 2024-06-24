<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AtRepairCenterOrder extends Model
{
    use HasFactory;

    

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'note','booking_time'
    ];


}
