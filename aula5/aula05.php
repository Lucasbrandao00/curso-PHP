<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores aritiméticos</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2> Valores recebidos: $n1 e $n2</h2>";
        $m = ($n1+$n2) / 2;
        //$s = $n1 + $n2;//
        //echo " A soma entre 3 e 5 éigual a:  $s";]//
        echo "A soma vale ".($n1+$n2);
        echo "<br/>A subtração vale ".($n1-$n2);
        echo "<br/>A multiplicação vale ".($n1*$n2);
        echo "<br/>A divisão vale ".($n1/$n2);
        echo "<br/>O modulo vale ".($n1%$n2);
        echo "<br/>A média vale $m";
    ?>
</div>
</body>
</html>