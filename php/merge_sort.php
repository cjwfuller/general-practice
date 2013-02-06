#!/usr/bin/php
<?php
function merge_sort( $unsorted ) {
    // Trivially sorted
    if( count( $unsorted ) <= 1 ) {
        return $unsorted;
    }
    // Put half the values in one array and half in another
    $left_arr = array_splice( $unsorted, 0, (int)( count( $unsorted ) / 2 ) );
    $right_arr = array_splice( $unsorted, (int)( count( $unsorted ) / 2 ) );
    // Recursively sort each half of the array
    $left = merge_sort( $left_arr );
    $right = merge_sort( $right_arr );
    return merge( $left, $right );
}

/**
 * Merge sort helper
 */
function merge( $left, $right ) {
    $result = array();
    while( count( $left ) > 0 and count( $right ) > 0 ) {
        if( $left[0] <= $right[0] ) {
            array_push( $result, array_shift( $left ) );
        } else {
            array_push( $result, array_shift( $right ) );
        }
    }
    array_splice( $result, count( $result ), 0, $left );
    array_splice( $result, count( $result ), 0, $right );
    return $result;
}

$arr = array( 7, 3, 8, 1 );
$arr = merge_sort( $arr );
print_r( $arr );
?>
