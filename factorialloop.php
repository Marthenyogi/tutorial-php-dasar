<?php
function facto(int $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}
var_dump(facto(6));

//factorial recursive
function recur(int $value): int{
    if($value == 1){
        return 1;
    }else{
        return $value * recur($value - 1);

    }
}
var_dump(recur(5));
?>