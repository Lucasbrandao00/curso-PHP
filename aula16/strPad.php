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

                    //coloca espaços por fora da varivável //
        $novo = str_pad($nome, 30, "-", STR_PAD_BOTH);
        $novo2 = str_pad($nome, 30, "-", STR_PAD_RIGHT);
        $novo3 = str_pad($nome, 30, "-", STR_PAD_LEFT);

        //Imprimindo a variável com os espaços alocados//
        printf("O $novo é lindo demais");
        printf("<br/> O $novo2 é lindo demais");
        printf("<br/> O $novo3 é lindo demais");
    ?>
</div>
</body>
</html>