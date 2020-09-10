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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em: $a e terá: $i anos. <br/>";
    if ($i>=18){
        $v = "Já pode votar";
        $d = "Já pode dirigir";

    }
    else{
        $v = "Não pode votar";
        $d = "Não pode dirigir";
    }
    echo "Com essa idade você $v e também $d!";
?><br/>
    <a href="exercicio01.html"><input type="submit" value="Voltar"></a>


</div>
</body>
</html>
