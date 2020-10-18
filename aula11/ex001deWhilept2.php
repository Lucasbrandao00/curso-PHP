<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>While 01</title>
</head>
<body>
<div>
    <form method="get" action="ex001deWhile.php">


        <?php
        $i = 1;

        while ($i <=5){

            $valor = isset($_GET["$i"])? $_GET["$i"]:0;
            echo "<br> Valor $i:  $valor";
            $i++;

        }

        ?>
        <br>
        <a href="ex001deWhile.php"><input type="submit" value="Voltar"></a>

    </form>
</div>
</body>
</html>