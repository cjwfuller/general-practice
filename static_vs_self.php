#!/usr/bin/php
<?php
/**
 * Program to demonstrate the difference between static and self
 * keywords
 */
class Animal {
    public static function which_class() {
        echo "Animal\n";
    }

    public static function say_class() {
        // Outputs Animal when say_class method called from Dog object
        self::which_class();         
        // Outputs Dog when say_class method called from Dog object
        // No 'bypass' of polymorphic behaviour
        static::which_class(); 
    }
}

class Dog extends Animal {
    public static function which_class() {
        echo "Dog\n";
    }
}

$obj = new Dog();
$obj->say_class();
?>
