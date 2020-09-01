<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variaveis de variaveis</title>
</head>
<body>
<div>
<?php
    $x = "abc";
    $$x = "def";
    echo "O conteudo da variavel X é: $x";
    echo "<br/>O conteudo da variavel ABC criada é: $abc";
?>
</div>
</body>
</html>
