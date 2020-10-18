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
    $nome = "Lucas";
    $vetor = str_split($nome);//Cria um vetor e pega cada letra e coloca em um índice//
    print_r($vetor);
    ?>
</div>
</body>
</html>