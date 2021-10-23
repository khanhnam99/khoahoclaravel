<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Active()
 * @method static static Deactivated()
 */
final class UserType extends Enum
{
    const Active =   1; // Trạng thái đang hoạt động
    const Deactivated =   0; // User bị khóa
}
