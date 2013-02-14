#!/usr/bin/php
<?php
for( $i = 1; $i <= 100; ++$i ) {
    if( ( 0 === $i % 3 ) and ( 0 === $i % 5 ) ) {
        print( "FizzBuzz\n" );
    } elseif( 0 === $i % 3 ) {
        print( "Fizz\n" );
    } elseif( 0 === $i % 5 ) {
        print( "Buzz\n" );
    } else {
        print( "$i\n" );
    }
}
?>
