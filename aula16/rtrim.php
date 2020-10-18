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
    $nome ="  José Da Silva   ";
    print strlen($nome);
    echo "<br/>";
    $novo = rtrim($nome);//serve para eliminar os espaços apenas do FINAL da string para somar os caracteres//
    print strlen($novo);
    ?>
</div>
</body>
</html>