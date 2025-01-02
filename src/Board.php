<?php

namespace Balsama\Sets;

use drupol\phpermutations\Generators\Permutations;
use drupol\phpermutations\Generators\Combinations;

class Board
{
    public function __construct(
        public array $cards,
    )
    {
    }

    public function getSets(): array
    {
        $sets = [];
        $potentialSets = new Combinations($this->cards, 3);
        foreach ($potentialSets->generator() as $combination) {
            $potentialSet = new PotentialSet($combination);
            if ($potentialSet->isSet()) {
                $sets[] = $potentialSet;
            }
        }
        return $sets;
    }
}