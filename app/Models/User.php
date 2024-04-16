<?php

namespace App\Models;

use App\Enums\StatusEnum;
use App\Enums\UsersTypes;
use App\Filters\User\UserFilters;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\Api\StatusInfo;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens,HasFactory,Filterable,Notifiable,StatusInfo;
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
    ];


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
    public function getFullNameAttribute(){
        return $this->attributes['first_name'] . ' ' .$this->attributes['last_name'];
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
    public function mechanicalUser()
{
    return $this->hasOne(Mechanical::class, 'user_id');
}

    
}
