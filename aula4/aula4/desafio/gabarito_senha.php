<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php

$filename = "senha_errors.txt";
$senha_secret = '123';

if ($_POST["senha"] == $senha_secret) {
    echo "Parabéns, você sabe a senha: " . $_POST["senha"];
} else {

    echo "Você errou!";
    
    if(!file_exists("senha_errors.txt")){
        $handle = fopen("senha_errors.txt", "w");
    } else {
        $handle = fopen("senha_errors.txt", "a");
    }

    fwrite($handle, $_POST["senha"] ."\n");
    $handle = fopen("senha_errors.txt", "r");
    fclose($handle);
}



?>
</body>
</html>
