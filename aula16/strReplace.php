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
        $frase = "Gosto de estudar Matemática! Matemática é muito da hora";
        $novaFrase = str_replace("Matemática", "PHP", $frase);//Troca uma palavra dentro de uma String//
        $novaFrase2 = str_ireplace("matemática", "PHP", $frase);//Troca uma palavra dentro de uma String ignorando as letras maiusculos ou minusculas//
        print ("$novaFrase");
        echo "<br/>";
        print ("$novaFrase2");
    ?>
</div>
</body>
</html>