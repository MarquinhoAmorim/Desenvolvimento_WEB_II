<?php
/*
Escreva um script que imprima qual o maior número.
Converter variáveis strings em inteiros
Use IF
*/
$a = "10";
$b = "1";

if ($a > $b) {
    echo 'A variável ($a) ' . intval($a, $a) . ' é maior que variável ($b) ' . intval($b, $b);
}

if($b > $a){
    echo 'A variável ($b) ' . intval($b, $b) . ' é maior que variável ($a) ' . intval($a, $a);
}

?>