<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor digitado é: ".number_format($rq, 2, ",", ".");

    ?>
    <a href="formulaio.html">Voltar</a>
</div>
</body>
</html>
