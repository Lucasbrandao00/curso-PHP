<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Function Get Args </title>
</head>
<body>
<div>
    <?php
    function soma(...$p){     //->>>>>>>>colocando um vetor para armazenar valores diversos
        $t = func_num_args();
        $s = 0;
        for ($i = 0; $i < $t; $i++){
            $s += $p[$i];

        }
        return $s;
    }

        $r = soma(10,10,10,10,10,10);
        echo "A soma dos valores é: $r"
    ?>
</div>
</body>
</html>