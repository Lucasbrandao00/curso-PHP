<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Rotina </title>
</head>
<body>
<div>
    <?php
        function soma($n1, $n2){
            $s = $n1 + $n2;
            echo "<p>A soma vale: $s</p>";
        }
        soma(10,20);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</div>
</body>
</html>