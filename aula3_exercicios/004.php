<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

if ($a > $b && $a > $c) {
    echo 'A variável ($a) ' . $a . ' é maior';
}

if ($b > $a && $b > $c) {
    echo 'A variável ($b) ' . $b . ' é maior';
} 

if($c > $a && $c > $b){
    echo 'A variável ($c) ' . $c . ' é maior';
}

/*
 * max() uma função que retorna o maior valor dentro dela
 */

// $numbers = max($a, $b, $c); 

// print_r($numbers);


?>