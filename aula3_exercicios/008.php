<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 150;

if ($numero % 10 == 0 && $numero % 3 == 0) {
    echo "Divisível";
} else {
    echo "Não Divisível";
}


?>