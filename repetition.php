<?php

$counter = 1;

while($counter <= 15) {
    echo "$counter" . PHP_EOL;
    $counter++;
}

for($counter = 1; $counter <= 15; $counter++){
    if($counter == 10) {
        continue;
    }

    if($counter == 14) {
        break;
    }
    echo "$counter" . PHP_EOL; 
}