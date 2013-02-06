#!/usr/bin/php
<?php
/**
 * Program to demonstrate difference between this and self keywords
 */
class Animal {
    public function which_class() {
        echo "Animal\n";
    }

    public function say_class() {
        // Comment/un-comment to experiment!
        // $this->which_class(); // Polymorphic behaviour
        self::which_class(); // Bypasses polymorphic behaviour
    }
}

class Dog extends Animal {
    public function which_class() {
        echo "Dog\n";
    }
}

$obj = new Dog();
$obj->say_class();
?>
