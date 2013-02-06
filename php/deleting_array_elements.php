#!/usr/bin/php
<?php
// Unset
$arr = array(4,7,1,8,2);
echo "Original array:\n";
print_r( $arr );
echo "Array after unsetting element with INDEX 2\n";
unset( $arr[2] );
print_r( $arr );

// Array splicing
$arr = array(4,7,1,8,2);
echo "Original array:\n";
print_r( $arr );
echo "Array after splicing array with OFFSET 2\n";
array_splice( $arr, 2, 1 );
print_r( $arr );

// Unset and array_values
// Note: Would replace any non-numeric keys with numeric ones 
$arr = array(4,7,1,8,2);
echo "Original array:\n";
print_r( $arr );
echo "Array after unsetting element with INDEX 2 and calling array_values\n";
unset( $arr[2] );
$arr = array_values( $arr );
print_r( $arr );
?>
