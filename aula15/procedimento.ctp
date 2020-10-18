<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Referência </title>
</head>
<body>
<div>
    <?php
        function teste($x){ //-----------> Utilizar o & para fazer referência a variável $a//
            $x += 2;
            echo "<p>O valo de X é: $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é: $a</p>";
    ?>
</div>
</body>
</html>