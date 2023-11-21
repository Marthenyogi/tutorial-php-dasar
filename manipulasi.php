<?php
$nama = "ino yogi";

echo "Nama : " . $nama . PHP_EOL;
echo "Nilai : " . 100 . "\n";
echo "\n";

$values =  (string)100;
var_dump($values);
$valuei = (int)"100";
var_dump($valuei);
$valuef = (float)"100.11";
var_dump($valuef);
echo "\n";

$name = "ino";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo "\n";

$name = "ino";//variabel parsing
echo "hello $name, slb" . PHP_EOL;
echo "\n";

$var = "var";
echo "this is {$var}s" . PHP_EOL;
?>