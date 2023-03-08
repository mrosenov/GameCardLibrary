<?php
class Card {
    public $suit;
    public $rank;

    public function __construct($suit = '', $rank = '') {
        $this->suit = $suit;
        $this->rank = $rank;
    }

    public function __toString() {
        $rank = $this->rank;
        switch ($rank) {
            case 1:
                $rank = "Ace";
                break;
            case 11:
                $rank = "Jack";
                break;
            case 12:
                $rank = "Queen";
                break;
            case 13:
                $rank = "King";
                break;
        }
        return $rank . ' of ' . $this->suit;
    }

    public function faceCard() {
        if ($this->rank > 10) {
            return "Face Card";
        }
        return "Not Face Card";
    }

    public function compare($Player1Rank, $Player2Rank) {

        if ($Player1Rank == 1 && $Player2Rank == 1) {
            echo "Тie";
            die();
        }

        if ($Player1Rank == 1) {
            echo "Player 1 wins";
            die();
        }

        if ($Player2Rank == 1) {
            echo "Player 2 wins";
            die();
        }

        if ($Player1Rank > $Player2Rank) {
            echo "Player 1 wins";
        }
        elseif ($Player1Rank < $Player2Rank) {
            echo "Player 2 wins";
        }
        else {
            echo "Tie";
        }
    }
}