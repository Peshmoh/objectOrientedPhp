<?php
/*
    Abstract class is a base class that can't create objects directly.
    It has methods that child classes must create (abstract methods).
    This example shows how a Dog and a Cat can have their own "sound" method 
    using the same abstract Animal class.
*/

abstract class Animal {
    abstract public function sound();
    public function sleep() {
        echo "The animal is sleeping\n";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Dog barks\n";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Cat meows\n";
    }
}

$dog = new Dog();
$dog->sound();  // Output: Dog barks
$dog->sleep();  // Output: The animal is sleeping

$cat = new Cat();
$cat->sound();  // Output: Cat meows
$cat->sleep();  // Output: The animal is sleeping
?>
