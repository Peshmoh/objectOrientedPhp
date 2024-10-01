<?php
/*
    I learned that static properties and methods are special because they belong to the class itself, 
    not to individual objects. This means we don’t have to create an object to use them.

    In this example, there’s a MathHelper class with a static property called $pi, 
    which is the number 3.14. The class also has a static method called circleArea 
    that helps us calculate the area of a circle.

    Since $pi and circleArea are static, we can use them directly from the class 
    without creating a MathHelper object. It’s like saying, "I don’t need to build something, 
    I can just use the formula right away."
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
