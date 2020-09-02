<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Operadores Lógicos</title>
</head>
<body>
<div>
    <?php
        $ano = $_GET["an"];
        $idade = 2020 - $ano;
        echo "Quem nasceu em  $ano tem idade de: $idade anos";
        $tipo = ($idade>=18 && $idade<=64)?"Obrigatorio":"Não obrigatorio";
        echo "<br/>E dessa forma seu voto é: $tipo";
    ?>
</div>
</body>
</html>
