<?php
/*
Crie um script que percorra toda a $array, apresentando os valores.
Utilize foreach.
Adapte o código para exibir somente os valores inteiros.
Realize a soma dos números inteiros

Dica: https://www.php.net/manual/en/control-structures.foreach.php
*/ 
$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
    "n4" => 'oi mundo',
];

foreach ($array as $key => $number) {
    echo " {$key} => {$number}" . PHP_EOL;
    echo "<br>";
}

echo "<hr>". PHP_EOL;
echo "<p> Apenas valores <b> inteiros e soma </b> </p>" . PHP_EOL;

foreach ($array as $key => $number) {

    if (is_numeric($number)) {
        echo " $key => $number" . PHP_EOL;
        echo "<br>";
    }
    
};

echo 'Soma dos valores inteiros(dentro do array): ' . array_sum($array);

?>