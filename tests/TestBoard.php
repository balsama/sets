<?php


use PHPUnit\Framework\TestCase;
use Balsama\Sets\Card;

use Balsama\Sets\Attributes\Color;
use Balsama\Sets\Attributes\Shape;
use Balsama\Sets\Attributes\Count;
use Balsama\Sets\Attributes\Fill;

class TestBoard extends TestCase
{
    private Card $card1;
    private Card $card2;
    private Card $card3;
    private Card $card4;
    private Card $card5;
    private Card $card6;

    protected function setUp(): void
    {
        parent::setUp();
        $this->card1 = new Card(0, 0, 0, 0);
        $this->card2 = new Card(1, 1, 1, 1);
        $this->card3 = new Card(2, 2, 2, 2);
        $this->card4 = new Card(0, 1, 2, 0);
        $this->card5 = new Card(0, 1, 2, 1);
        $this->card6 = new Card(0, 1, 2, 2);
    }

    public function testGetSets(): void
    {
        $board = new \Balsama\Sets\Board([
            $this->card1,
            $this->card2,
            $this->card3,
            $this->card4,
            $this->card5,
            $this->card6,
        ]);

        $sets = $board->getSets();
        $this->assertCount(2, $sets);
    }

    public function testMyBoard1(): void
    {
        $card1 = new Card(Count::ONE, Color::RED, Fill::SOLID, Shape::SQUIGGLE);
        $card2 = new Card(Count::ONE, Color::PURPLE, Fill::EMPTY, Shape::PILL);
        $card3 = new Card(Count::ONE, Color::GREEN, Fill::SHADED, Shape::SQUIGGLE);

        $card4 = new Card(Count::TWO, Color::PURPLE, Fill::SOLID, Shape::PILL);
        $card5 = new Card(Count::TWO, Color::PURPLE, Fill::SHADED, Shape::DIAMOND);
        $card6 = new Card(Count::TWO, Color::GREEN, Fill::SOLID, Shape::DIAMOND);

        $card7 = new Card(Count::THREE, Color::PURPLE, Fill::SHADED, Shape::SQUIGGLE);
        $card8 = new Card(Count::THREE, Color::PURPLE, Fill::SOLID, Shape::DIAMOND);
        $card9 = new Card(Count::THREE, Color::GREEN, Fill::SOLID, Shape::SQUIGGLE);

        $card10 = new Card(Count::THREE, Color::RED, Fill::SOLID, Shape::DIAMOND);
        $card11 = new Card(Count::THREE, Color::PURPLE, Fill::EMPTY, Shape::DIAMOND);
        $card12 = new Card(Count::THREE, Color::GREEN, Fill::SOLID, Shape::PILL);

        $board = new \Balsama\Sets\Board([
            $card1,
            $card2,
            $card3,
            $card4,
            $card5,
            $card6,
            $card7,
            $card8,
            $card9,
            $card10,
            $card11,
            $card12,
        ]);

        $sets = $board->getSets();
        $this->assertEmpty($sets);
    }

    public function testMyBoard2(): void
    {
        $card1 = new Card(Count::ONE, Color::RED, Fill::SOLID, Shape::SQUIGGLE);
        $card2 = new Card(Count::ONE, Color::PURPLE, Fill::EMPTY, Shape::PILL);
        $card3 = new Card(Count::ONE, Color::GREEN, Fill::SHADED, Shape::DIAMOND);

        $card4 = new Card(Count::TWO, Color::PURPLE, Fill::SOLID, Shape::PILL);
        $card5 = new Card(Count::TWO, Color::PURPLE, Fill::SHADED, Shape::DIAMOND);
        $card6 = new Card(Count::TWO, Color::GREEN, Fill::SOLID, Shape::DIAMOND);

        $card7 = new Card(Count::THREE, Color::PURPLE, Fill::SHADED, Shape::SQUIGGLE);
        $card8 = new Card(Count::THREE, Color::PURPLE, Fill::SOLID, Shape::DIAMOND);
        $card9 = new Card(Count::THREE, Color::GREEN, Fill::SOLID, Shape::SQUIGGLE);

        $card10 = new Card(Count::THREE, Color::RED, Fill::SOLID, Shape::DIAMOND);
        $card11 = new Card(Count::THREE, Color::PURPLE, Fill::EMPTY, Shape::DIAMOND);
        $card12 = new Card(Count::THREE, Color::GREEN, Fill::SOLID, Shape::PILL);

        $board = new \Balsama\Sets\Board([
            $card1,
            $card2,
            $card3,
            $card4,
            $card5,
            $card6,
            $card7,
            $card8,
            $card9,
            $card10,
            $card11,
            $card12,
        ]);

        $sets = $board->getSets();
        $this->assertNotEmpty($sets);
    }

}
