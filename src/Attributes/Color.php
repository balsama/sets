<?php

namespace Balsama\Sets\Attributes;

class Color
{
    public const GREEN = 0;
    public const RED = 1;
    public const PURPLE = 2;

    public const MAP = [
        0 => 'green',
        1 => 'red',
        2 => 'purple',
    ];

    public static function getValue(
        int $code,
    ): string
    {
        return self::MAP[$code];
    }
}