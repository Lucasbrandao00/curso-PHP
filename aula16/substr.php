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
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);//Pega da String em sua posição//
        $sub2 = substr($site,-5, 2);//Pega os 2 primerios caractesres da String quinta em diante em sua posição//
        $sub3 = substr($site,-5);//Pega os ultimos 5 caracteres da String em sua posição//
        echo "$sub";
        echo "<br/>$sub2";
        echo "<br/>$sub3";


    ?>
</div>
</body>
</html>\