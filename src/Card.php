<?php

namespace Balsama\Sets;

use Balsama\Sets\Attributes\Color;
use Balsama\Sets\Attributes\Fill;
use Balsama\Sets\Attributes\Count;
use Balsama\Sets\Attributes\Shape;

class Card
{
    public function __construct(
        public int $count,
        public int $color,
        public int $fill,
        public int $shape,
    )
    {
    }

    public function getDescription(): array
    {
        return [
            'count' => Count::getValue($this->count),
            'color' => Color::getValue($this->color),
            'fill' => Fill::getValue($this->fill),
            'shape' => Shape::getValue($this->shape),
        ];
    }
}