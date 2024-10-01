<?php
/*
    Static properties and methods belong to the class itself, not to individual objects.
    This means we can use them without creating an object.
    This example shows how to use a static property and method to calculate the area of a circle.
*/

class MathHelper {
    public static $pi = 3.14;

    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

echo MathHelper::$pi;  // Output: 3.14
echo MathHelper::circleArea(5);  // Output: 78.5
?>
