<?php
function inc(){
    static $counter = 1;
    echo "counter : $counter" . PHP_EOL;
    $counter++;
}
inc();
inc();
inc();
?>