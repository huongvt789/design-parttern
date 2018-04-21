<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/20/18
 * Time: 5:35 PM
 */
interface Observer
{
    public function update(Subject $sms); //SMS viettel can gui toi khach hang.
}

class Customer implements Observer  //Viettel mac dinh cho sim khach hang dang ky nhan duoc thong bao.
{
    private $name;

    public function update(Subject $sms)
    {
        echo "Xin chao:" . $sms->getEvent() . "Viettel khuyen mai 100% gia tri the nap";
    }

    public function __construct($name)
    {
        $this->name = $name;
    }
}

interface Subject
{
    public function registerOb(Observer $yes); //Tiep tuc nhan tin

    public function resfuseOb(Observer $no); //Tu choi nhan tin

    public function notifies(); //Cap nhat thong tin den tat ca thue bao.
}

class Event implements Subject
{
    private $evenName;
    private $observer = array();

    public function __construct($event)
    {
        $this->evenName = $event;
    }

    public function registerOb(Observer $yes)  //Thuc thi nhan gui toi noi dung
    {
        $this->observer[] = $yes;
    }

    public function resfuseOb(Observer $no) //Khach hang tu cho nhan thong tin
    {
        foreach ($this->observer as $okey => $avue) {
            if ($avue == $no) {
                unset($this->observer[$okey]);
            }
        }
    }

    public function notifies() //Thong bao duoc gui toi tung doi tuong dang ky dich vu cua viettel/
    {
        foreach ($this->observer as $event) {
            $event->update($this);
        }
    }

    public function getEvent()
    {
        return $this->evenName;
    }
}

$customer1 = new Customer("Vu Thi Huong");
$customer2 = new Customer("Tran Thanh cao");
$event = new Event("Nhan ngay 20-1");
$event->registerOb($customer1);
$event->registerOb($customer2);
$event->notifies();