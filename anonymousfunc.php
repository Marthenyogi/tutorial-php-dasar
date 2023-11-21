<?php
$say = function (string $name){
    echo "hello $name" . PHP_EOL;
};
$say("ino");

function gb(string $name, $filter){
    $finalname = $filter($name);
    echo "Good bye $finalname" . PHP_EOL;

}
gb("ino", function (string $name): string{
    return strtoupper($name);
});

//akses variabel 
$namef = "ino";
$namel = "yogi";
$say = function () use ($namef, $namel) {
    echo "hello $namef $namel" . PHP_EOL;

};
$say();
?>