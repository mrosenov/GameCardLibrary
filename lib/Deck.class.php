<?php
abstract class Deck {
    public $cards = array();

    public function __construct($ArrayOfCards) {
        $this->cards = $ArrayOfCards;
    }

    public function count() {
        return sizeof($this->cards);
    }

    public function shuffle() {
        shuffle($this->cards);
        return $this->cards;
    }

    public function draw() {
        array_pop($this->cards);
        return $this->cards;
    }
}