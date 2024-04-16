<?php
namespace App\Enums;

enum PaymentStatus: int
{
    case Done    = 1;
    case Pending = 2;
    public function name()
    {
        return match($this)
        {
            self::Done    => __('main.attributes.done'),
            self::Pending => __('main.attributes.pending'),
        };
    }

    public static function getStatusInfo(string $status): array
    {
        $statusValue = $status == self::Done->value
            ? self::Done->name()
            :     self::Pending->name();
        return ['name' => $statusValue, 'value' => (int)$status];
    }
    public static function getValues()
    {
        return [
            self::Done->value,
            self::Pending->value,
        ];
    }
}
