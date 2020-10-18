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
    $frase=  ("Estou aprendendo PHP no curso de PHP");
    $cont= substr_count($frase, "PHP");//Encontra a String solicitada
    print ("PHP encontrado $cont vezes");
    ?>
</div>
</body>
</html>\