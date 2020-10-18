<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Tabuada </title>
</head>
<body>
<div>
    <form method="get" action="tabuada02.php    ">
        <select name="num">
            <?php
            for ($c = 1; $c <=10; $c++){
                echo "<option> $c </option>";
            }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>


</div>
</body>
</html>