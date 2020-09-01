<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Incremento</title>
</head>
<body>
<div>
<?php
    $atual = $_GET["aa"];
    echo "O ano atual é: $atual e o ano anterior é: ". --$atual;// -> pré-decremento
    //echo "O ano atual é: $atual e o ano anterior é: ". $atual--;// ->pós-decremento

?>
</div>
</body>
</html>
