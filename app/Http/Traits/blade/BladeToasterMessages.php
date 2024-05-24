<?php

namespace App\Http\Traits\blade;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

trait BladeToasterMessages
{

    public static function UpdatedToaster()
    {
        return toast("Updated Successfuly", 'info')->background('#222b40');
    }
    public static function StoredToaster()
    {
        return toast("Stored Successfuly", 'success')->background('#222b40');
    }
    public static function DeletedToaster()
    {
        return toast("Deleted Successfuly", 'warning')->background('#222b40');
    }

}
