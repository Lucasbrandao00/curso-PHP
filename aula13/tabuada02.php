<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Tabuada </title>
</head>
<body>
<div>
    <?php
        printf("=============TABUADA===========<br>");

        $n = isset($_GET["num"])? $_GET["num"]:1;

         for ($c = 1; $c <= 10; $c++){
             $r = $n*$c;
             echo"$n X $c = $r<br>";
         }
    ?>

    <a href="tabuada.php"><input type="submit" value="Voltar"></a>
</div>
</body>
</html>