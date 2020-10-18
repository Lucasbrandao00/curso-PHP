<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Vetor </title>
</head>
<body>
<div>
    <pre>
    <?php
    $v = array("nome"=>"Ana",
                "idade"=>23,//Isso só é possivel pois o PHP tem variáveis compostas NÃO homogenias
                "peso"=>65.5);
    $v["fuma"] = true;//Criando mais uma posição
    foreach ($v as $k => $c){
        echo "O campo $k possui o conteudo $c <br/>";
    }
    ?>
    </pre>
</div>
</body>
</html>