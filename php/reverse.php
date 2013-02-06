#!/usr/bin/php
<?php
/**
 * Reverse a string using only a single char as a temporary variable
 * 
 * See https://github.com/cjwfuller/practicing-c
 * for version that uses NO temporary variable
 */

$test = "some string";
echo $test . "\n";

for( $i = 0; $i <= strlen( $test ) / 2; $i++ ) {
    $tmp = $test[$i];
    $test[$i] = $test[strlen( $test ) - $i - 1];
    $test[strlen( $test ) - $i - 1] = $tmp;
}

echo $test . "\n";
?>
