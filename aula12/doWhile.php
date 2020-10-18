<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Do While</title>
</head>
<body>
<div>
    <?php
    $c = 1;
    do{
        echo "<br> $c";
        $c+=2;
    }while($c<=20);

    ?>
</div>
</body>
</html>