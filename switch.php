<?php
$nilai ="A";
switch ($nilai) {
    case "A":
        echo "anda lulus a" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "anda lulus C" . PHP_EOL;
        break;
    case "D":
        echo "anda lulus D" . PHP_EOL;
        break;
    default:
        echo "gagal" . PHP_EOL;
}
?>