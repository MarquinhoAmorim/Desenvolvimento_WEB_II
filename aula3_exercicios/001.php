<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
echo $variavel_1;
echo " = ";

echo gettype($variavel_1);
// Imprimir o valor a variável e o seu tipo
echo "<br>";
$variavel_2 = 123;
echo $variavel_2;
echo " = ";

echo gettype($variavel_2);
// Imprimir o valor a variável e o seu tipo
echo "<br>";
$variavel_3 = 1;
echo $variavel_3;
echo " = ";

echo gettype($variavel_3);
// Imprimir o valor a variável e o seu tipo
echo "<br>";
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
print_r($array);
echo " = ";

print_r(gettype($array));
// Imprimir o valor a variável e o seu tipo

?>