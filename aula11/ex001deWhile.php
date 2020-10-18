<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>While 01</title>
</head>
<body>
<div>
    <form method="get" action="ex001deWhilept2.php">
        <?php
        $i = 1;
        while ($i <=5){
            echo "Valor $i: <input type='number' name='$i' max='100' min= '0' value='0'></br>";
             $i++;
        }
        ?>
        <input type="submit" value="Enivar"/>
    </form>
</div>
</body>
</html>