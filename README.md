#  Set Checker
https://en.wikipedia.org/wiki/Set_(card_game)

Checks to see if collection contains a Set.

## Usage
Rudimentary Web interface deployed to https://sets-2febbc630b1d.herokuapp.com/

### Developers
1. Create a number of cards:
   ```injectablephp
   $card1 = new Card(Count::ONE, Color::RED, Fill::SOLID, Shape::SQUIGGLE);
   $card2 = new Card(Count::ONE, Color::PURPLE, Fill::EMPTY, Shape::PILL);
   $card3 = new Card(Count::ONE, Color::GREEN, Fill::SHADED, Shape::SQUIGGLE);
   ...
   ```
2. Create a board from the cards:
   ```injectablephp
   $board = new \Balsama\Sets\Board([
            $card1,
            $card2,
            $card3,
            ...
   ]);
   ```
3. Check to see if there are any sets!
   ```injectablephp
   $sets = $board->getSets();
   ```
   
## About
Inspired by this [Numberphile video](https://www.youtube.com/watch?v=EkFX9jUJPKk), I assign each attribute (count,
color, fill, and shape) a value from 0-2 and then mod(3) the values from each attribute across each Collection of three
cards in a board. If all attributes mod(3) == 0, it's a Set!

I'm pretty sure this is the first practical use of modulo I've ever implementaed outside of /every n rows/ or similar
:).