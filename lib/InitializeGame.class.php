<?php
class InitializeGame extends Deck {
    public $suits = array('S' =>"Spades", 'H' => "Hearts", 'C' => "Clubs", 'D' => "Diamonds");
    public $cardNumbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9','10', '11', '12', '13');

    public function __construct() {
        $ArrayOfCards = $this->InitializeGame();
        parent::__construct($ArrayOfCards);
    }

    public function InitializeGame() {
        $ArrayOfCards = array();

        foreach ($this->suits as $suit) {
            $rank = 1;

            foreach ($this->cardNumbers as $card) {
                $temp = new Card();
                $temp->suit = $suit;
                $temp->rank = $rank++;
                $ArrayOfCards[] = $temp;
            }
        }
        return $ArrayOfCards;
    }

    public function giveCard() {
        return array_pop($this->cards);
    }


}