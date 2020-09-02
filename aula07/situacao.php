<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Situação</title>
</head>
<body>
<div>
<?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A média entre $nota1 e $nota2 é: $m";
    $sit = ($m>6)?"Aprovado":"Reprovado";
    //echo "<br/>Situação do aulo é: ".(($m<6)?"Reprovado":"Aprovado"); --> economizando variavel(memória) e contatenando o operador unário direto
    echo "<br/>Situação do aulo é: $sit";

?>
</div>
</body>
</html>
