<?php
/*
    So, I learned that an abstract class is like a plan or a drawing. 
    It's something that we can’t use by itself. We need other classes, like Dog or Cat, 
    to complete the plan and tell us what’s happening.

    Imagine we have a plan that says "an animal makes a sound," but it doesn’t tell us 
    what sound it makes. It's like if someone gave us a picture of an animal, 
    but we didn’t know if it was a dog or a cat yet.

    Then, when we know it’s a dog, we can say "the dog barks," or if it’s a cat, we say "the cat meows."
    Both of them follow the same plan, but they make different sounds. That’s how I understand 
    an abstract class – it sets the rules, but the details come from other classes like Dog and Cat.
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
