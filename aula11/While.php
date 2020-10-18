<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>While</title>
</head>
<body>
<div>
    <?php
        $i = 1;
        while ($i <= 10){
            echo "<br>$i"; /* ---------> contagem de 1 até 10*/
            $i+=2;
        }

       /* $i = 10;
         while ($i >= 1){ ----------> contagem de 10 até 1
          echo "<br>$i";
          $i--;
    }*/
    ?>


</div>
</body>
</html>