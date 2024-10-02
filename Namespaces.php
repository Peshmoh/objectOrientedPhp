<?php
/*
    my understanding about namespaces is that they help us keep things organized, 
    especially when we have many classes. It's like putting similar things in a folder 
    to avoid confusion.

    For example, if I have a class called User in one place, and someone else has 
    a different User class in another place, namespaces stop them from getting mixed up. 
    It’s like giving each class a unique home.

    In this example, I put the User class inside the MyApp namespace. 
    When I want to use the User class, I need to mention the MyApp namespace first, 
    so the program knows exactly which User class I’m talking about.
*/

namespace MyApp;

class User {
    public function getInfo() {
        echo "This is the user information\n";
    }
}

// To use the class, I need to include the namespace like this:
$user = new \MyApp\User();
$user->getInfo();  // Output: This is the user information
?>
