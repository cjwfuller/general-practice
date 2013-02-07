#!/usr/bin/php
<?php
include( "BST.php" );

$bst = new BST();

$five = new Node( 5 );
$four = new Node( 4 );
$one = new Node( 1 );
$seven = new Node( 7 );
$nine = new Node( 9 );

$bst->insert( $five );
$bst->insert( $four );
$bst->insert( $one );
$bst->insert( $seven );
$bst->insert( $nine );

$bst->inorder();
?>
