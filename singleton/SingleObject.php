<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 2:17 PM
 */
class SingleObject
{
    private static $instance;  //Tao doi tuong tinh de luu doi tuong duy nhat dc su dung.
//Tao constructor de ngan chan viec tao mot doi tuong thong qua tu khoa "new"
    private function __construct()
    {
    }
//Cho phep thanh phan ben ngoai truy cap no de lay ve doi tuong cua class.
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new SingleObject();
        }
        return self::$instance;
    }

    public function Info($name1, $job)
    {
        echo $name1;
        echo $job;
    }
}

$result = SingleObject::getInstance();
$result2 = $result->Info("Huong", "Dev");
echo $result2;
