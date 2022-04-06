<?php

/** Programa principal
 * 
 */
echo "Ingrese el numero que desee : ";
$n = trim(fgets(STDIN));
echo "Ingrese otro numero que desee";
$m = trim(fgets(STDIN));
$factorial = factoria($n);
echo " El factorial de " . $n . "es: " . $factorial . " ";
$arreglosNombre=[3,8,9,142,33];

/** Ejercicio01
 * 
 */

function factoria($n)
{
    $j = 1;
    for ($i = 1; $i < $n + 1; $i++) {
        $j = $j * $i;
    }
    return $j;
}
/**Ejercicio 02 */
function esPar($n)
{
    if ($n % 2 == 0) {
        $esPar = true;
    } else {
        $esPar = false;
    }
    return $esPar;
}
/**Ejercicio 03
 * 
 */

function resto($n,$m){
    if (($n % $m) == 0) {
        $divisible = true;
    } else {
        $divisible = false;
    }
    return $divisible;
}
/** ejercicio 04 
 * 
*/
function numeroMayorYmenor ($arreglosNombre){
    for ($i=0; $i <count($arreglosNombre) ; $i++) { 
        
    }


}

/**ejercicio 05.
 * 
 */
function leerNombres($n){
for(i=1; i<$n; i++){
$leerNombre=[];
$leerNombre=[$i]=trim(fgets(STDIN));
}
return $leerNombre;
}
/**Ejercicio 06
 * 
 */
/**Ejercicio 07
 * 
 */
function($a,$b,$n,$m){

}
