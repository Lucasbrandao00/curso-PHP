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
        //Repitir Strings sem utilizar estruturas de repetição//
        $txt = str_repeat("PHP, ", 5);
        printf("O texto grado foi $txt");
        echo "<br/>";
        printf(str_repeat("-", 20));
    ?>
</div>
</body>
</html>