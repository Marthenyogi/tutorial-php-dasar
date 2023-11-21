<?php
$names = ["ino", "mart", "mars"];
foreach ($names as $name) {
    echo "hello $name" . PHP_EOL;
}
echo "\n";
goto a; //goto operator
echo "hello a" . PHP_EOL;

a:
echo "hello a" . PHP_EOL;
echo "\n";
$count = 1; //goto ope di loop
while (true) {
    echo "while loop $count" . PHP_EOL;
    $count++;
    if ($count > 10) {
        goto end;
    } 
}
end:
echo "end loop";
?>