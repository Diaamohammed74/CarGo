<?php

namespace App\Enums;

enum OrderTypeEnum: int
{
    case OnRoad         = 1;
    case InRepairCenter = 2;
    public function name()
    {
        return match ($this) {
            self::OnRoad         => 'On road',
            self::InRepairCenter => 'In repair center',
        };
    }

    public static function getStatusInfo(string $status): array
    {
        $statusValue = $status == self::OnRoad->value
            ? self::OnRoad->name()
            :    self::InRepairCenter->name();
        return ['name' => $statusValue, 'value' => $status];
    }
    public static function getValues()
    {
        return [
            self::OnRoad->value,
            self::InRepairCenter->value,
        ];
    }
}
