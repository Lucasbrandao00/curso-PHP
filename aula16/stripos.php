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
    $frase=  ("Estou aprendendo PHP");
    $pos = stripos($frase, "php");//Mesma coisa da função strpos, porém está função stripos ignora se é minusculas ou maiusculas //
    echo "$frase <br/> A String foi encontrada na posição: $pos";

    ?>
</div>
</body>
</html>\