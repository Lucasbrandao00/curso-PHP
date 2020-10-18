<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Matriz </title>
</head>
<body>
<div>
    <pre>
    <?php

        $m = array(array(6,4),
                   array(4,9),
                   array(3,2));
        $m[0][1] = $m[2][0];//Alterando o valor da matriz em sua respectiva linha e coluna//
        print_r($m);
    ?>
    </pre>
</div>
</body>
</html>