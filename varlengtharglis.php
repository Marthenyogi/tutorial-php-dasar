<?php
function sumALL(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "total" . implode(" + ", $values) . " = $total" . PHP_EOL;

}
sumALL(10, 20, 30, 40);
sumALL(...[10, 20, 30, 40]);
?>