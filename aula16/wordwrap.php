<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> String </title>
</head>
<body>
<div>
    <?php
        $t = "Aqui temos um texto giante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 20, "<br/>\n");//quebra linha de texto no site e no cod/fonte//

        print_r($r);

    ?>
</div>
</body>
</html>