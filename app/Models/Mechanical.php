<?php

namespace App\Models;

use App\Filters\Mechanical\MechanicalFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mechanical extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = MechanicalFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $attributes = [
        'avg_rate' => 0,
    ];
    protected $fillable = [
        'user_id','join_date','birth_date','job_type','avg_rate'
    ];
    protected $primaryKey = 'user_id';
    public function mechanicalUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'mechanical_specializations', 'mechanical_id', 'specialization_id');
    }
}
