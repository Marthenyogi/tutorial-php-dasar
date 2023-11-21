<?php
function sayhel(){
    echo "hello func" . PHP_EOL;
}
sayhel();
sayhel();

echo "\n";

$buat = true;
if($buat){
    function hi(){
        echo "Hi" . PHP_EOL;
    }
}
hi();
echo "\n";

function sayhello($name){ //func argument
    echo "hello $name" . PHP_EOL;
}
sayhello("ino");
sayhello("yanko");
echo "\n";
function sayhellos($name = "mart"){ //def func argument
    echo "hello $name" . PHP_EOL;
}
sayhellos();
sayhellos("yanko");
?>