<?php

$limit = 10;
$a = 0;
$b = 1;

for ($i = 1; $i <= $limit; $i++) {
    
    $fibonacci = $a + $b;
    echo $fibonacci . " ";

    if ($fibonacci > 100) {
        break;
    }

    $a = $b;
    $b = $fibonacci;
}
?>
