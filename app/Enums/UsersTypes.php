<?php

namespace App\Enums;
enum UsersTypes: int
{
    case ADMIN      = 1;
    case MECHANICAL = 2;
    // case STUDENT    = 3;

    public static function getValues()
    {
        return [
            self::ADMIN->value,
            // self::INSTRUCTOR->value,
            // self::STUDENT->value,
        ];
    }
}
