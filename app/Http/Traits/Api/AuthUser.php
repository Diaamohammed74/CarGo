<?php 
namespace App\Http\Traits\Api;

trait AuthUser{
    public static function authUser(){
        return auth()->user();
    }
}