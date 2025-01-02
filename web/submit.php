<?php

include_once __DIR__ . "/../vendor/autoload.php";
use Balsama\Sets\Board;
use Balsama\Sets\Card;

$count = count($_POST);
$cardCount = $count / 4;

$i = 1;
while ($i <= $cardCount) {
    $cards[] = new Card(
        $_POST['count' . $i],
        $_POST['color' . $i],
        $_POST['fill' . $i],
        $_POST['shape' . $i],
    );
    $i++;
}

$board = new Board($cards);
$sets = $board->getSets();

echo '<h1>There are ' . count($sets) . ' sets on this board.</h1>';

foreach ($sets as $set) {
    foreach ($set->cards as $card) {
        $description = $card->getDescription();
        echo $description['count'] . "\t\t| ";
        echo $description['color'] . "\t\t| ";
        echo $description['fill'] . "\t\t| ";
        echo $description['shape'] . "<br>";
    }
    echo "<hr>";
}