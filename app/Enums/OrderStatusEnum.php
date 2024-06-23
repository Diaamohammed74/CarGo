<?php

namespace App\Enums;

enum OrderStatusEnum: int
{
    case Pending   = 2;
    case Processing = 1;
    case Completed = 3;
    public function name()
    {
        return match ($this) {
            self::Pending   => 'Pending',
            self::Processing => 'Processing',
            self::Completed => 'Completed',
        };
    }

    public static function getStatusInfo(string $status): array
    {
        $statusValue = match ($status) {
            self::Pending->value   => self::Pending->name(),
            self::Processing->value => self::Processing->name(),
            self::Completed->value => self::Completed->name(),
            default                => '',
        };
        return ['name' => $statusValue, 'value' => $status];
    }
    public static function getValues()
    {
        return [
            self::Pending->value,
            self::Processing->value,
            self::Completed->value,
        ];
    }
}
