#!/usr/bin/php
<?php
include( "HashStringTable.php" );

// Make a table
$capacity = 10;
$hash_table = new HashStringTable( $capacity );

// Put some values in
$hash_table->put( "Chris" );
$hash_table->put( "John" );
$hash_table->put( "William" );
$hash_table->put( "Test" );

// Print the whole table
$hash_table->print_table();

// Search the table for some values
$result = $hash_table->get( "John" );
print "Found `John` at posn $result[0] in $result[1] comparison(s)\n";
$result = $hash_table->get( "Test" );
print "Found `Test` at posn $result[0] in $result[1] comparison(s)\n";

// Delete some values
$hash_table->delete( "Chris" );
$hash_table->print_table();
$hash_table->delete( "William" );
$hash_table->print_table();
?>
