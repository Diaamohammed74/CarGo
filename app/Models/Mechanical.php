<?php

namespace App\Models;

use App\Enums\MechanicalJobType;
use App\Models\MechanicalsByOrder;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use App\Filters\Mechanical\MechanicalFilters;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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
        'user_id', 'join_date', 'birth_date', 'job_type', 'avg_rate', 'specialization_id',
    ];
    protected $casts = [
        'job_type' => MechanicalJobType::class,
    ];
    public function getJobTypeAttribute(){
        return MechanicalJobType::getJobTypeInfo($this->attributes['job_type']);
    }
    protected $primaryKey = 'user_id';
    public function mechanicalUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }
    public function fullTimeJob()
    {
        return $this->hasOne(MechanicalsFullTime::class, 'mechanical_id');
    }

    public function byOrderJob()
    {
        return $this->hasOne(MechanicalsByOrder::class, 'mechanical_id');
    }
}
