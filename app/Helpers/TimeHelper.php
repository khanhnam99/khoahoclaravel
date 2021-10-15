<?php

namespace App\Helpers;


class TimeHelper
{
    public static function tokenExpire()
    {
        $today = strtotime(date('Y-m-d H:i:s'));
        return $today + (config('jwt.ttl') * 60);
    }
}
