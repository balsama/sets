<?php

namespace Balsama\Sets\Attributes;

class Count
{
    public const ONE = 0;
    public const TWO = 1;
    public const THREE = 2;

    public const MAP = [
        0 => 'one',
        1 => 'two',
        2 => 'three',
    ];

    public static function getValue(
        int $code,
    ): string
    {
        return self::MAP[$code];
    }
}