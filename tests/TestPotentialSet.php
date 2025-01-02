<?php


use PHPUnit\Framework\TestCase;
use Balsama\Sets\Card;
use Balsama\Sets\PotentialSet;
use Balsama\Sets\Attributes\Color;
use Balsama\Sets\Attributes\Count;
use Balsama\Sets\Attributes\Fill;
use Balsama\Sets\Attributes\Shape;

class TestPotentialSet extends TestCase
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
        $this->card1 = new Card(
            Color::GREEN,
            Fill::EMPTY,
            Count::ONE,
            Shape::DIAMOND
        );
        $this->card2 = new Card(1, 1, 1, 1);
        $this->card3 = new Card(2, 2, 2, 2);
        $this->card4 = new Card(0, 1, 2, 0);
        $this->card5 = new Card(0, 1, 2, 1);
        $this->card6 = new Card(0, 1, 2, 2);
    }

    public function testIsSet(): void
    {

        $potentialSet = new PotentialSet(
            [
                $this->card1,
                $this->card2,
                $this->card3,
            ]
        );
        $isSet = $potentialSet->isSet();
        $this->assertTrue($isSet);

        $potentialSet = new PotentialSet(
            [
                $this->card1,
                $this->card2,
                $this->card4,
            ]
        );
        $isSet = $potentialSet->isSet();
        $this->assertFalse($isSet);

        $potentialSet = new PotentialSet(
            [
                $this->card4,
                $this->card5,
                $this->card6,
            ]
        );
        $isSet = $potentialSet->isSet();
        $this->assertTrue($isSet);
    }
}
