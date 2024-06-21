<?php

namespace App\Models;

use App\Filters\Customer\CustomerFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = CustomerFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'national_id','user_id'
    ];

    public function cars()
    {
        return $this->hasMany(CustomerCar::class, 'customer_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
