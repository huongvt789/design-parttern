<?php
/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 1:27 PM
 */
abstract class AbstractFactory{
    abstract function getShape ($shape);
    abstract function getColor($color);
}