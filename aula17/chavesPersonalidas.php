<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title> Vetor </title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array( 3=>5,
                    1=>9,//Manipulando os índices a cada valor a qualquer hora
                    0=>8,
                    7=>7);
        unset($v[0]);//Tira o indice e o valor do indice
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>