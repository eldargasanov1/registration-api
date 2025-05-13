<?php

namespace App\Custom\Enums;

trait Valuable
{
    /**
     * Returns all cases' values
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
