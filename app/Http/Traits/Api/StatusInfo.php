<?php

namespace App\Http\Traits\Api;

use App\Enums\StatusEnum;

trait StatusInfo
{
    public function getStatusAttribute()
    {
        return StatusEnum::getStatusInfo($this->attributes['status']);
    }
}
