<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Funcoes Aritimeticas</title>
    <style>
        h2{
            font: 15pt arial;
            color: red;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é: ". abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
        echo "<br/>A raiz de $v1 e ". sqrt($v1);
        echo "<br/>O valor de $v2 arendodado é ". round($v2);//cell(arredonda pra cima) floor(arredonda pra baixo)
        echo "<br/>A parte inteira de $v2 é ". intval($v2);
        echo "<br/>O valor de $v1 em moéda é R$". number_format($v1,2,",",".");//formatar um número em valor monetário
    ?>
</div>
</body>
</html>
