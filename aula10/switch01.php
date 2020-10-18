<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Switch</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $op = isset($_GET["oper"])? $_GET["oper"]:1;
        switch ($op){
            case 1:
                $r = $n * 2;
                break;

            case 2:
                $r = pow($n,3);
                break;

            case 3:
                $r = sqrt($n); // n ^ (1/2);

        }
        echo "O resultado da operação solicitada foi: <span  class='foco'>$r</span>";
    ?>
    <br>
    <a href="switch01.html"><input type="submit" value="Voltar"></a>
</div>
</body>
</html>
