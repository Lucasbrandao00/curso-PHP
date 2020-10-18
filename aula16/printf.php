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
    $p = "leite";
    $pr = 4.5;
    //  echo "O preço custa R$: $pr e o nome é: $p";//
    printf("O %s custa R$: %.2f", $p, $pr);
    ?>
</div>
</body>
</html>