<?php
$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
    echo "lulus" . PHP_EOL;  
}

$nilai = 70; //else statment
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
    echo "lulus" . PHP_EOL;  
}else{
    echo "tdk lulus" . PHP_EOL;
}
echo "\n";

$nilai = 70; //elseif statment
$absen = 90;
if ($nilai >= 80 && $absen >= 80){
    echo "lulus a" . PHP_EOL;  
}elseif
    ($nilai >= 70 && $absen >= 70){
        echo "lulus b" . PHP_EOL; 
}elseif
    ($nilai >= 60 && $absen >= 60){
        echo "lulus c" . PHP_EOL; 
}elseif
    ($nilai >= 50 && $absen >= 50){
        echo "lulus d" . PHP_EOL; 
}else{
    echo "lulus E" . PHP_EOL;
}
echo "\n";

$nilai = 70; //elseif statment
$absen = 90;
if ($nilai >= 80 && $absen >= 80) :
    echo "lulus a" . PHP_EOL;  
elseif
    ($nilai >= 70 && $absen >= 70) :
        echo "lulus b" . PHP_EOL; 
elseif
    ($nilai >= 60 && $absen >= 60) :
        echo "lulus c" . PHP_EOL; 
elseif
    ($nilai >= 50 && $absen >= 50):
        echo "lulus d" . PHP_EOL; 
else :
    echo "lulus E" . PHP_EOL;
endif;

?>