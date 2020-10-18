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
        $site = "Curso em Vídeo";
        $v = explode(" ",$site);//Cria um vetor e procura pelos espaços e qual a String que vai ser quebrada e coloca cada palavra e joga em um índice//
        print_r($v);
    ?>
</div>
</body>
</html>