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
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase,0);// serve para mostrar a quantidade de  palavras da String//
        print ( $cont);
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        $cont = str_word_count($frase,1);//Cria um vetor e  vai armazenar as palavras em um vetor TOP demais//
        print_r($cont);
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        $cont = str_word_count($frase,2);//Cria um vetor e  vai armazenar as palavras em um vetor e mostrando o posicionamento de cada palavra dentro da String TOP demais//
        print_r($cont);

    ?>
</div>
</body>
</html>