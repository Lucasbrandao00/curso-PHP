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

    if ($i<16){
        $tipoVoto = "Não voto";
    }
    elseif (($i>= 16 && $i>18) || ($i>65)){
            $tipoVoto = "Voto opcional";
    }
    else{
        $tipoVoto = "Voto obrigatório";
    }

    echo "Para essa idade: $tipoVoto";
    ?>
    <br/>
    <a href="exercicio02.html"><input type="submit" value="Voltar"></a>
</div>
</body>
</html>
