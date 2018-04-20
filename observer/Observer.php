<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/19/18
 * Time: 5:16 PM
 */
abstract class GameObserver
{
    abstract function update(GameSubject $subject);
}

abstract class GameSubject
{
    abstract function attach(GameObserver $observer);

    abstract function detach(GameObserver $observer);

    abstract function notify();
}

class PatternObserver extends GameObserver
{
    public function __construct()
    {
    }

    function update(GameSubject $subject)
    {
        echo $subject->getFavorite();
    }
}

class PatternSubject extends GameSubject
{
    private $favorite = null;
    private $observer = array();

    public function __construct()
    {
    }

    function attach(GameObserver $observer)
    {
        $this->observer[] = $observer;
    }

    function detach(GameObserver $observer)
    {
        foreach ($this->observer as $okey => $avue) {
            if ($avue == $observer) {
                unset($this->observer[$okey]);
            }
        }
    }

    function updateContentLike($newLike)
    {
        $this->favorite = $newLike;
        $this->notify();
    }

    function getFavorite()
    {
        return $this->favorite;
    }

    function notify()
    {
        foreach ($this->observer as $new) {
            $new->update($this);
        }
    }
}

$patternOb = new PatternObserver(); //Khoi tao vung nho cho Observer.
$patternSu = new PatternSubject(); //Khoi tao vung nho cho Subj.
$patternSu->attach($patternOb); //Goi toi ham attect cua Subject. Voi gia tri bien tro toi Ob.
$patternSu->updateContentLike("Oki nhe");
