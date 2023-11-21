<?php
$names = ["ino", "marsel", "yoGi"];
var_dump($names[0]);
$names[0] = "lino";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "mart";
var_dump($names);
var_dump(count($names));
?>