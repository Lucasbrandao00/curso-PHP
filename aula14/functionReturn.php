<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Function Return </title>
</head>
<body>
<div>
    <?php
    function soma($n1, $n2){
       return $n1 * $n2;
    }
    $x = 5;
    $y = 5;
    $r = soma($x, $y);
         printf("A soma entre $x e $y é: $r");
    ?>
</div>
</body>
</html>