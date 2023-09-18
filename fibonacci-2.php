<?php
function printFibonacci($n) {
    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo $a . " ";

        $next = $a + $b;

        $a = $b;
        $b = $next;
    }
}

$limit = 15;
printFibonacci($limit);

?>
