<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
*/
$nota_1 = 3;
$nota_2 = 6;

$media = ($nota_1 + $nota_2) / 2;

echo $media;
echo "<br>";

if ($media <= 4.9) {
    echo "Reprovado";
} elseif ($media > 4.9 && $media < 7) {
    echo "Recuperação";
} else {
    echo "Aprovado";
}



?>