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
        <table border="1"><tr>
    <?php
    $c = range(5,20,2);
    foreach ($c as $vet){//Foreach: coloca o vetor um do lado do outro e coloca um elemento dentro do vetor
        echo "<td>$vet ";
    }
    ?>
        </table>
    </pre>
</div>
</body>
</html>