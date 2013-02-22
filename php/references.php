#!/usr/bin/bash
<?php
$foo = "foo";
$bar = &$foo;
echo $foo . "\n";
echo $bar . "\n";
$bar = "test";
echo $foo . "\n";
echo $bar . "\n";
?>
