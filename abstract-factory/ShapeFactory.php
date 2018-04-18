<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 1:32 PM
 */
require_once 'Square.php';
require_once 'Restange.php';
require_once 'AbstractFactory.php';
class ShapeFactory extends AbstractFactory
{

    function getShape($shape)
    {
        switch ($shape) {
            case Shape1::SQUARE:
                return new Square();
                break;
            case Shape1::RESTANGE:
                return new Restange();
                break;
            default:
                return null;
                break;
        }
        return null;
    }

    function getColor($color)
    {
        return null;
    }
}