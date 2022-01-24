<?php

namespace App\Traits\Client;

use Carbon\Carbon;

trait FormatSpatiePermission
{
    public static function getPermissionName($value)
    {
        if ($value == 'admin') {
            return 'مدير ';
        }
        if ($value == 'user') {
            return ' مستخدم]l';
        }
    }
}
