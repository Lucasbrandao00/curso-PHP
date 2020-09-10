<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2)/2;

    echo "A média é: $m<br>";


    if($m>=7){
        echo "Aluno aprovado";
    }elseif ($m<7 && $m>=5){
        echo "Infelizmente você irá para a recuperação";
    }else{
        echo "Você está reprovado";
    }

    ?>


</div>
</body>
</html>
