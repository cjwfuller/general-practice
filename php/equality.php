#!/usr/bin/php
<?php
/**
 * Demonstration of the difference between strict and 
 * non-strict equality checking
 */
$haystack = "abc";
$needle = "a";
$result = strpos( $haystack, $needle );
echo "Search result: " . $result . "\n";
// Non-strict (does NOT work)
if( FALSE != $result ) {
    echo "Needle found (non-strict search)\n";
} else {
    echo "Needle not found (non-strict search)\n";
}
// Strict (works)
if( FALSE !== $result ) {
    echo "Needle found (strict search)\n";
} else {
    echo "Needle not found (strict search)\n";
}
?>
