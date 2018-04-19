<?php
/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/19/18
 * Time: 5:16 PM
 */
abstract class GameObserver{
    abstract function update(GameSubject $subject);
}
abstract class GameSubject{
    abstract function attach(GameObserver $observer);
    abstract function detach(GameObserver $observer);
}
class PatternObserver extends GameObserver {
    public function __construct()
    {
    }

    function update(GameSubject $subject)
    {
        echo "Call to gamesubject";
        //continute;
    }
}
class PatternSubject extends GameSubject{
    private $favorite = null;
    private $observer =array();
    public function __construct()
    {
    }

    function attach(GameObserver $observer)
    {
        $this->observer[] = $observer;
    }

    function detach(GameObserver $observer)
    {
        //continute.
    }
    function getFavorite(){
        return $this->favorite;
    }
}
$patternOb = new PatternObserver();
$patternSu = new PatternSubject();
$patternSu->attach($patternOb);
