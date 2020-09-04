<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Idade</title>
</head>
<body>
<div>
    <?php
        //isset: para verificar se foi atribuido valores ou não
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem: $idade anos.";
    ?>
    <a href="formulario02.html">Voltar</a>

</div>
</body>
</html>
