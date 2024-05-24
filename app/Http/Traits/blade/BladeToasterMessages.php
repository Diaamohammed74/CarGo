<?php

namespace App\Http\Traits\blade;

trait BladeToasterMessages
{
    public static function dashboardToaster($message,$type){
        return toast($message,$type)->background('#222b40');
    }
    public static function UpdatedToaster()
    {
        return self::dashboardToaster("Updated Successfuly", 'info');
    }
    public static function StoredToaster()
    {
        return self::dashboardToaster("Stored Successfuly", 'success');
    }
    public static function DeletedToaster()
    {
        return self::dashboardToaster("Deleted Successfuly", 'warning');
    }

}
