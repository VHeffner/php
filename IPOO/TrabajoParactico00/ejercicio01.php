<?php
echo "Ingrese el numero que desee pasar a factorial: ";
$n = trim(fgets(STDIN));
$factorial = factoria($n);
echo " " . $factorial . " ";
function factoria($n)
{
    $j = 1;
    for ($i = 1; $i < $n + 1; $i++) {
        $j = $j * $i;
    }
    return $j;
}
function esPar($n)
{
    if ($n % 2 == 0) {
        $esPar = true;
    } else {
        $esPar = false;
    }
    return $esPar;
}

function pedo($n, $m)
{
    $m = trim(fgets(STDIN));
    if ($n % $m = 0) {
        $divisible = true;
    } else {
        $divisible = false;
    }
    return $divisible;
}
