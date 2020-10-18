<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> String </title>
</head>
<body>
<div>
    <?php
    $nome =  ("Lucas Brandão");
    $nome = utf8_decode($nome);
    print ("Seu nome é: ".strtolower($nome));//coloca os caracteres em letras minusculas//

   ?>
</div>
</body>
</html>