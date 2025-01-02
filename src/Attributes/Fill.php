<?php

namespace Balsama\Sets\Attributes;

class Fill
{
    public const EMPTY = 0;
    public const SHADED = 1;
    public const SOLID = 2;

    public const MAP = [
        0 => 'empty',
        1 => 'shaded',
        2 => 'solid',
    ];

    public static function getValue(
        int $code,
    ): string
    {
        return self::MAP[$code];
    }
}