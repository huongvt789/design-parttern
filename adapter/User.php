<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 4:24 PM
 */
class SimpleUser{
    private $title;
    function __construct($title_new)
    {
        $this->title=$title_new;
    }
    function getTitle(){
    return $this->title;
    }
}
//Class adapter goi t phuong thuc trong class simple.
class ProUser{
    private $majob;
    function __construct(SimpleUser $user)
    {
        $this->majob = $user;
    }
    function getChangeLevel(){
        return $this->majob->getTitle();
    }
}

//Thuc thi test :
$simple = new SimpleUser("Vui tinh va thong minh");
$pro = new ProUser($simple);
echo $pro->getChangeLevel();

//Note: Nghia la hai lop khac nhau doi tuong khac nhau, k co su ke thua ma van co the sap nhap dc
//Thong qua ham tao.