<?php

namespace App\Enums;

enum MechanicalJobType: int
{
    case FullTime = 1;
    case ByOrder  = 2;


    public static function getValues()
    {
        return [
            self::FullTime->value,
            self::ByOrder->value,
        ];
    }
    public function name()
    {
        return match ($this) {
            self::FullTime => __('main.attributes.full_time_job'),
            self::ByOrder  => __('main.attributes.by_order_job'),
        };
    }

    public static function getJobTypeInfo(string $status): array
    {
        $statusValue = $status == self::FullTime->value
            ? self::FullTime->name()
            :     self::ByOrder->name();
        return ['name' => $statusValue, 'value' => $status];
    }
}
