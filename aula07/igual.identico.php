<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Igual/Identico</title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b)?"sim":"não";
        //$r = ($a === $b)?"sim":"não"; verefica se é igual é também do mesmo tipo
        echo "As variaveis A e B são iguais? $r";
    ?>
</div>
</body>
</html>
