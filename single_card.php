<?php
    ini_set('display_errors', 1);
    include_once "lib/Deck.class.php";
    include_once "lib/Card.class.php";
    include_once "lib/InitializeGame.class.php";

    $card = new Card('Hearts', 11);
    echo "{$card->__toString()}";