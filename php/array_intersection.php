#!/usr/bin/php
<?php
// Array intersection for two sorted arrays
$first = array( 2, 3, 5, 6, 7 );
$second = array( 3, 4, 5, 7 );
$arr = array();
$i = $j = 0;
while( $i < sizeof( $first) && $j < sizeof( $second ) ) {
    if( $first[$i] < $second[$j] ) { 
        $i++;
    } else if( $second[$j] < $first[$i] ) {
        $j++;
    } else {
        $arr[] = $first[$i];
        $i++;
        $j++;
    }
}
print_r( $arr );
?>
