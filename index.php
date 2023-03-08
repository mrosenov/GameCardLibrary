<?php
    ini_set('display_errors', 1);
    include_once "lib/Deck.class.php";
    include_once "lib/Card.class.php";
    include_once "lib/InitializeGame.class.php";

    $game = new InitializeGame();
    $game->shuffle();

    echo "Deck Size: {$game->count()} <br />";
    echo "<hr />";

    $Player1Card = $game->giveCard();
    echo "Player 1 has: {$Player1Card}<br />";
    $card = new Card($Player1Card->suit,$Player1Card->rank);
    echo $card->faceCard();

    echo "<hr />";

    $Player2Card = $game->giveCard();
    echo "Player 2 has: {$Player2Card} <br />";
    $card = new Card($Player2Card->suit,$Player2Card->rank);
    echo $card->faceCard();

    echo "<hr />";
    $card->compare($Player1Card->rank,$Player2Card->rank);