<?php
$first = [
    "first_name" => "ino"
];
$last = [
    "last_name" => "yogi"
]; //array
var_dump($first + $last);

$a = [
    "first_name" => "ino",
    "last_name" => "yogi"
];
$b = [
    "last_name" => "yogi",
    "first_name" => "ino"
]; //identity array
var_dump($a == $b);
var_dump($a === $b);
?>