<?php

function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo PHP_EOL; 
}

function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    $current = $start;
    while ($current <= $end) {
        if ($current % 2 == 0) {
            echo $current. " ";
        }
        $current++;
    }
    echo PHP_EOL; 
}

function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    $current = $start;
    do {
        if ($current % 2 == 0) {
            echo $current. " ";
        }
        $current++;
    } while ($current <= $end);
    echo PHP_EOL;
}

$start = 1;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersUsingForLoop($start, $end, $step);

echo "Using while loop: ";
printEvenNumbersUsingWhileLoop($start, $end, $step);

echo "Using do-while loop: ";
printEvenNumbersUsingDoWhileLoop($start, $end, $step);

?>
