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
    $pos = strpos($frase, "PHP");//Verificar em qual posição está a substring em que foi relacionada, neste caso é PHP//
    echo "$frase <br/> A String foi encontrada na posição: $pos";

    ?>
</div>
</body>
</html>