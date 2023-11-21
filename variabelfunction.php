<?php
function foo(){
    echo "foo" . PHP_EOL;
}

function bar(){
    echo "bar" . PHP_EOL;
}
$functionname = "foo";
$functionname();

$functionname = "bar";
$functionname();
echo "\n";
function say(string $name, $filter){
    $finalname = $filter($name);
    echo "hello $finalname" . PHP_EOL;
}
function yogi(string $name): string {
    return "sample $name";
}

say("ino", "yogi");

?>