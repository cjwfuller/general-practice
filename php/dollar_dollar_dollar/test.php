#!/usr/bin/php
<?php
$foo = "hello";
$$foo = "world";
echo $foo . "\n";
echo ${$foo} . "\n";
?>
