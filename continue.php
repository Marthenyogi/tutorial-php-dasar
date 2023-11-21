<?php
for ($counter = 0; $counter <= 100; $counter++){
    if ($counter % 2 == 0){
        continue;
    }
    echo "helc" . $counter . PHP_EOL;
}

?>