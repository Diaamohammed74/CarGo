<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use App\Enums\OrderTypeEnum;
use App\Enums\PaymentStatus;
use App\Models\OrderProduct;
use App\Filters\Order\OrderFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = OrderFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $casts = [
        'order_type'     => OrderTypeEnum::class,
        'order_status'   => OrderStatusEnum::class,
        'payment_status' => PaymentStatus::class,
    ];
    protected $fillable = [
        'customer_id',
        'payment_id',
        'customer_car_id',
        'order_type',
        'order_status',
        'payment_status',
        'total_amount',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'user_id');
    }

    public function customerCar()
    {
        return $this->belongsTo(CustomerCar::class, 'customer_car_id');
    }

    public function orderMechanicals()
    {
        return $this->belongsToMany(Mechanical::class, 'order_mechanicals', 'mechanical_id', 'order_id');
    }

    public function orderServices()
    {
        return $this->belongsToMany(Service::class, 'order_services');
    }

    public function orderProducts()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('quantity');
    }
    public function onRoad()
    {
        return $this->hasOne(OnRoadOrder::class, 'order_id');
    }
}
