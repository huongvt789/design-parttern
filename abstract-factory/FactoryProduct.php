<?php
/**
 * Created by PhpStorm.
 * User: viva
 * Date: 4/18/18
 * Time: 1:50 PM
 */
require_once 'ShapeFactory.php';
require_once 'ColorFactory.php';

class FactoryProduct
{
    public static function getFactory($choise)
    {
        $choise = strtolower($choise);
        if ($choise == 'shape') {
            return new ShapeFactory();
        } elseif ($choise == 'color') {
            return new ColorFactory();
        } else
            return null;
    }
}

$shape = FactoryProduct::getFactory('shape');
$result = $shape->getShape(Shape1::RESTANGE);
$result->draw();
$color = FactoryProduct::getFactory('color');
$result2 = $color->getColor(Color::GREEN);
$result2->describle();
