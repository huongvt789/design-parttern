<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 10:13 AM
 */
require_once 'Restange.php';
require_once 'Square.php';

class FactoryDesignPattern
{
    function getShape($type)
    {
        switch ($type) {
            case Shape1::RESTANGE;
                return new Restange();
                break;
            case Shape1::SQUERA;
                return new Square();
                break;
            default:
                return null;
                break;
        }
        return null;
    }
}

$factory = new FactoryDesignPattern();
$shapeRestange = $factory->getShape(Shape1::RESTANGE);
$shapeRestange->draw();

