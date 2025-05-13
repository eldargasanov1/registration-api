<?php

namespace App\Custom\Enums;

interface DefaultEnum
{
    /**
     * @return array<int, string>
     */
    public static function values(): array;
}
