<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message', 'admin_id', 'whatssapp_reply'
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->message = nl2br($model->message);
        });
        static::creating(function ($model) {
            $model->whatssapp_reply = nl2br($model->whatssapp_reply);
        });
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }
}
