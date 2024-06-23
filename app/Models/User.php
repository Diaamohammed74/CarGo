<?php

namespace App\Models;

use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use App\Filters\User\UserFilters;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\Api\StatusInfo;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Filterable, Notifiable, StatusInfo;
    protected string $default_filters = UserFilters::class;

      /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'image',
        'type',
        'status',
        'gender',
        'email_verified_at',
        'password',
        'provider',
        'provider_id',
    ];


    public function isAdmin()
    {
        // Assuming you have a 'role' field to check for admin role
        return $this->type ==UsersTypes::ADMIN;
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
        'status'            => StatusEnum::class,
        'type'              => UsersTypes::class,
    ];
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
    public function scopeActive($query)
    {
        return $query->where('status', StatusEnum::Active->value);
    }
    public function scopeAdmin($query)
    {
        return $query->where('type', UsersTypes::ADMIN->value);
    }
    public function scopeMechanical($query)
    {
        return $query->where('type', UsersTypes::MECHANICAL->value);
    }
    public function scopeCustomer($query)
    {
        return $query->where('type', UsersTypes::CUSTOMER->value);
    }
    public function mechanicalUser()
    {
        return $this->hasOne(Mechanical::class, 'user_id');
    }
    public function customerUser()
    {
        return $this->hasOne(Customer::class, 'user_id');
    }

    public function services()
    {
        return $this->hasManyThrough(
            Service::class,
            Mechanical::class,
            'user_id',                     // Foreign key on Mechanical
            'id'     ,                     // Foreign key on Service
            'id'     ,                     // Local key on User
                      'specialization_id'  // Local key on Mechanical
        );
    }


    public function getImageAttribute()
    {
        if(isset($this->attributes['image'])){
            if (str_starts_with($this->attributes['image'], 'http')) {
                return $this->attributes['image'];
            } else {
                return Storage::url($this->attributes['image']);
            }
        }
        return Storage::url(asset('assets-front/images/avatar.png'));
    }
}
