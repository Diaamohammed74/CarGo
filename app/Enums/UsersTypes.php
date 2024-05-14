<?php

namespace App\Enums;

enum UsersTypes: int
{
    case ADMIN      = 1;
    case MECHANICAL = 2;
    case CUSTOMER   = 3;

    public static function getValues()
    {
        return [
            self::ADMIN->value,
            self::MECHANICAL->value,
            self::CUSTOMER->value,
        ];
    }
}
