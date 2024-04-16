<?php
namespace App\Enums;

enum StatusEnum: int
{
    case Active   = 1;
    case Inactive = 2;
    public function name()
    {
        return match($this)
        {
            self::Active   => __('main.attributes.active'),
            self::Inactive => __('main.attributes.inactive'),
        };
    }

    public static function getStatusInfo(string $status): array
    {
        $statusValue = $status == self::Active->value
            ? self::Active->name()
            :   self::Inactive->name();
        return ['name' => $statusValue, 'value' =>$status];
    }
    public static function getValues()
    {
        return [
            self::Active->value,
            self::Inactive->value,
        ];
    }
}
