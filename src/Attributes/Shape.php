<?php

namespace Balsama\Sets\Attributes;

class Shape
{
    public const DIAMOND = 0;
    public const PILL = 1;
    public const SQUIGGLE = 2;

    public const MAP = [
        0 => 'diamond',
        1 => 'pill',
        2 => 'squiggle',
    ];

    public static function getValue(
        int $code,
    ): string
    {
        return self::MAP[$code];
    }
}