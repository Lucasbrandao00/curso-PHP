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
        $novo = ltrim($nome);//serve para eliminar os espaços apenas do INICIO da string para somar os caracteres//
        print strlen($novo);
    ?>
</div>
</body>
</html>