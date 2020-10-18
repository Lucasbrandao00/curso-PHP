<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Função </title>
</head>
<body>
<div>
    <?php
        require_once "funcoesPhp.php"; //-----------------> Pode utilizar também o include, com o include o arquivo não se torna obrigatório //
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(8);
        echo "<h2>Finalizando programa...</h2>"
    ?>
</div>
</body>
</html>