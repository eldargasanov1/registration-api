<?php

namespace App\Custom\Enums;

enum UserGenders: string implements DefaultEnum
{
    use Valuable;
    case MALE = 'male';
    case FEMALE = 'female';
}
