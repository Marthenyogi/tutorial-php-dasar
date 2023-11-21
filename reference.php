<?php
$name = "eko";

$othername = &$name;
$othername = "ino";
echo $name . PHP_EOL;

echo "\n";
function inc(int &$value){
    $value++;
}
$counter = 1; //pass by reference
inc($counter);
echo $counter . PHP_EOL;
echo "\n";
function &getvalue(){
    static $value = 100;//returning refen
    return $value;
}
$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;

?>