<?php

include_once __DIR__ . "/../vendor/autoload.php";
use Balsama\Sets\Board;
use Balsama\Sets\Card;

$post = $_POST;

$i = 1;
while ($i < 13) {
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

echo '<p>There are ' . count($sets) . ' sets on this board.';