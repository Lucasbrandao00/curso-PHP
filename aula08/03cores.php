<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]: "Texto generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]: "black";
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Hehehehe</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class = 'texto'>$txt</span>";
    ?>
    <a href="03formulário.html">Voltar </a>


</div>
</body>
</html>
