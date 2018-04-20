<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/20/18
 * Time: 5:35 PM
 */
interface Observer
{
    public function update($sms);
}

class Customer implements Observer
{
    private $name;

    public function update($sms)
    {
        echo "Xin chao:" . $this->name . $sms . "Viettel khuyen mai 100% gia tri the nap";
    }

    public function __construct($name)
    {
        $this->name = $name;
    }
}

interface Subject
{
    public function registerOb(Observer $yes);

    public function resfuseOb(Observer $no);

    public function notifies();
}

class Event implements Subject
{
    private $evenName;
    public function registerOb(Observer $yes)
    {

    }

    public function resfuseOb(Observer $no)
    {

    }

    public function notifies()
    {

    }
}
//
