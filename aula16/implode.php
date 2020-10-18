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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode("#", $vetor);//Ou Join, Coloca espeçoes entre os índices//
        print($texto);
    ?>
</div>
</body>
</html>