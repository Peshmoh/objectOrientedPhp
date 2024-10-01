<?php
/*
    Namespaces help organize classes and avoid name conflicts.
    This example shows how the User class is part of the MyApp namespace.
    When we want to use the User class, we include the namespace in the code.
*/

namespace MyApp;

class User {
    public function welcome() {
        echo "Welcome to MyApp!\n";
    }
}

$user = new \MyApp\User();
$user->welcome();  // Output: Welcome to MyApp!
?>
