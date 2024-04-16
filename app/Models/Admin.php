<?php

namespace App\Models;

use App\Filters\Admin\AdminFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = AdminFilters::class;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];
    protected $primaryKey = 'user_id';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
