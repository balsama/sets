<?php

namespace Balsama\Sets;

class PotentialSet
{
    public function __construct(
        public array $cards,
    )
    {
        if (count($cards) !== 3) {
            throw new \Exception("A potential set must have exacrtly three cards.");
        }
    }

    public function isSet(): bool
    {
        $attributes = [
            'color',
            'fill',
            'count',
            'shape',
        ];
        foreach ($attributes as $attribute) {
            if ($this->getAttributeModulo($attribute)) {
                return false;
            }
        }
        return true;
    }

    public function getAttributeModulo(string $attribute): int
    {
        foreach ($this->cards as $card) {
            $attributeValues[] = $card->$attribute;
        }

        return (array_sum($attributeValues) % 3);
    }
}