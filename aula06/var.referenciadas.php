<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variáveis Referênciadas</title>
</head>
<body>
<div>
<?php
    $a = 3;
    //$b = $a;-> sem referência
    $b = &$a;//->com referência
    $b += 5;
    echo "A variavel A vale: $a";
    echo "<br/>A variavel B vale: $b";
?>
</div>
</body>
</html>
