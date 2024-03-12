<?php
/*
Escreva um script que imprima qual o maior número.
Use IF .. ELSE
*/
$a = 10;
$b = 100;
$c = 40;

if ($a > $b && $a > $c) {
    echo 'A variável ($a) ' . $a . ' é maior';

} elseif($b > $a && $b > $c) {
    echo 'A variável ($b) ' . $b . ' é maior';
} else {
    echo 'A variável ($c) ' . $c . ' é maior';
}


?>