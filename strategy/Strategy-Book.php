<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/19/18
 * Time: 2:37 PM
 */
interface GameInterface
{
    public function showTitle($book_game);
}

class Soccer implements GameInterface
{
    public function showTitle($book_game)
    {
        return $book_game;
    }
}

class Swimming implements GameInterface
{
    public function showTitle($book_game)
    {
        return $book_game . 'any more';
    }
}

class StrategyContext
{
    private $strategy = NULL;

    public function __construct($id)
    {
        switch ($id) {
            case "A1":
                $this->strategy = new Soccer();
                break;
            case "A2":
                $this->strategy = new Swimming();
                break;
        }
    }

    public function showTitleGame($title)
    {
        return $this->strategy->showTitle($title);
    }
}

//Test.
$strate1 = new StrategyContext('A1');
echo $strate1->showTitleGame("Like so code oki.");
$strate2 = new StrategyContext("A2");
echo $strate2->showTitleGame("Must make todo it");