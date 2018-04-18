<?php

/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 1:36 PM
 */
require_once 'Red.php';
require_once 'Green.php';

class ColorFactory extends AbstractFactory
{

    function getShape($shape)
    {
        return null;
    }

    function getColor($color)
    {
        switch ($color) {
            case Color::RED:
                return new Red();
                break;
            case Color::GREEN:
                return new Green();
                break;
            default:
                return null;
                break;
        }
        return null;
    }
}