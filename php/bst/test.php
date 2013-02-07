#!/usr/bin/php
<?php
include( "BST.php" );

$bst = new BST();

$five = new Node( 5 );
$four = new Node( 4 );
$one = new Node( 1 );
$seven = new Node( 7 );
$nine = new Node( 9 );

// Iteratively insert some Nodes
//$bst->insert_itr( $five );
//$bst->insert_itr( $four );
//$bst->insert_itr( $one );
//$bst->insert_itr( $seven );
//$bst->insert_itr( $nine );

// Recursively insert some Nodes
$bst->insert_recur( $five );
$bst->insert_recur( $four );
$bst->insert_recur( $one );
$bst->insert_recur( $seven );
$bst->insert_recur( $nine );

// Traverse tree inorder
$bst->inorder();
?>
