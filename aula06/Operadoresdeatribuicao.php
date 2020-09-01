<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>OP</title>
</head>
<body>
<div>
    <?php
    $preco = $_GET["p"];
    echo "O  preço do produto é R$ ". number_format($preco, 2,",",".");
    $preco += ($preco*10/100);
    //$preco -= ($preco*10/100);-> desconto no produto!//
    echo "<br/> O novo preço com 10% de aumento será R$ ". number_format($preco, 2,",",".");


    ?>
</div>
</body>
</html>
