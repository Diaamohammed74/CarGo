<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MechanicalsByOrder extends Model
{
    use HasFactory;
    protected $table    = 'mechanicals_by_order';
    protected $fillable = [
        'mechanical_id', 'city_id',
    ];
    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }
}
