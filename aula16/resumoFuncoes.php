<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Aula de PHP - Funções</title>
    <meta charset="UTF-8"/>
    <!--<link rel="stylesheet" type="text/css" href="_css/style.css">-->
    <style type="text/css">
        div {background-color: #ccc; padding: 5px 20px; margin-bottom: 10px;}
    </style>
</head>
<body>
<div>
    <h2>Função printf();</h2>
    <?php
    // funcao printf  ==> permite exibir itens formatados.
    $hora  = array(9,14,'AM');
    $estou = 'escrevendo...';
    // formata: São 9:14 AM e estou escrevendo.
    printf("São %d:%d %s e estou %s",$hora[0],$hora[1],$hora[2],$estou);

    // formatando o número 100 em varias possibilidades.
    $numero = 100;
    printf('<br>%b <br>',$numero); // mostra em binário.
    printf('%c <br>',$numero);     // mostra em caractere ASCII.
    printf('%d <br>',$numero);     // numero decimal positivo ou negativo.
    printf('%e <br>',$numero);     // trata com notação cientifíca.
    printf('%u <br>',$numero);    // numero decimal positivo.
    printf('%f <br>',$numero);     // numero flutuante usando o locale.
    printf('%F <br>',$numero);     // numero flutuante sem usar o locale.
    printf('%o <br>',$numero);     // mostra um numero octal.
    printf('%s <br>',$numero);     // mostra como uma string.
    printf('%x <br>',$numero);    // numero hexadecimal com letras minusculas.
    printf('%X <br>',$numero);     // numero hexadecimal com letras maiusculas.
    ?>
</div>
<div>
    <h2>Função printf();</h2>
    <?php
    // adicionando espaços para a direita e esquerda.
    $numero = 65;
    echo "<pre>";
    // adicionando espacos para a direita.
    printf(" '%-11d' ",$numero); // '65           '
    echo "<br>";
    // adicionando espacos para a esquerda.
    printf(" '%11d' ",$numero);  // '           65'
    echo "<br>";
    // adiciona 11 espacos para a esquerda
    // e conta apenas um caractere para a string (s).
    printf(" '%11.1s' ",$numero); // '          6'
    echo "</pre>";
    ?>
    <?php
    // formata data: 20/04/1987.
    printf("%02d/%02d/%04d",20,04,1987);
    echo "<br>";
    // formata dinheiro: 50.59
    printf("%01.2f",000050.59);
    ?>
</div>
<div>
    <h2>Função printf(); e sprintf();</h2>
    <?php
    // cria uma variavel com sprintf.
    $variavel = sprintf('tenho %d anos.',27);
    // so agora vou exibir seu valor.
    echo $variavel; // tenho 27 anos.
    ?>
</div>
<div>
    <h2>Função print_r();</h2>
    <?php
    // exibe vetores.
    $v[0] = 5;
    $v[1] = 8;
    $v[2] = 2;
    print_r($v);
    ?>
</div>
<div>
    <h2>Função var_dump();</h2>
    <?php
    // exibe vetores mostrando a quantidade de indices e seu tipo primitivo.
    $vet = array(4,9,2);
    var_dump($vet);
    ?>
</div>
<div>
    <h2>Função var_export();</h2>
    <?php
    // exibe vetores.
    $vet2 = array(5,0,1);
    var_export($vet2);
    ?>
</div>
<div>
    <h2>Função wordwrap();</h2>
    <?php
    // cria quebras de linha dinamicamente.
    $txt = "Esse é um texto longo feito em PHP para mostrar o uso da funcao word wrap";
    $r   = wordwrap($txt, 5, "<br>\n", true);
    echo $r;
    ?>
</div>
<div>
    <h2>Função strlen();</h2>
    <?php
    // verifica o tamanho da string contando os caracteres inclusive espacos em branco.
    $nome = "henrique bortoletto da cruz";
    echo strlen($nome);
    ?>
</div>
<div>
    <h2>Função trim();</h2>
    <?php
    // elimina espacos em branco no inicio e no fim da string.
    $nome = "   henrique bortoletto da cruz   ";
    echo strlen($nome); // resulta em 33.
    echo "<br>";
    echo strlen(trim($nome)); // resulta em 27.
    ?>
</div>
<div>
    <h2>Função ltrim();</h2>
    <?php
    // elimina espacos em branco no inicio de uma string.
    $nome = "   henrique     ";
    echo strlen($nome); // resulta em 16.
    echo "<br>";
    echo strlen(ltrim($nome)); // resulta em 13;
    ?>
</div>
<div>
    <h2>Função rtrim();</h2>
    <?php
    // elimina espacos em branco no final de uma string.
    $nome = "   henrique      ";
    echo strlen($nome); // resulta em 16.
    echo "<br>";
    echo strlen(rtrim($nome)); // resulta em 11.
    ?>
</div>
<div>
    <h2>Função str_word_count();</h2>
    <?php
    // funcao str_word_count -> conta palavras dentro de uma string.
    $frase = "eu vou estudar php";
    echo str_word_count($frase,0); // [Parametro 0] retorna um inteiro.
    echo "<br>";
    print_r(str_word_count($frase,1)); // [Parametro 1] retorna um array.
    echo "<br>";
    print_r(str_word_count($frase,2)); // [Parametro 2] retorna um array com indices.
    ?>
</div>
<div>
    <h2>Função explode();</h2>
    <?php
    // quebra uma string e coloca dentro de um array.
    $nome = "henrique bortoletto da cruz";
    $r = explode(" ", $nome);
    print_r($r);
    ?>
</div>
<div>
    <h2>Função implode(); ou join();</h2>
    <?php
    // transforma um vetor numa string.
    $v[0] = "Curso";
    $v[1] = "em";
    $v[2] = "Video";
    echo implode(" # ",$v);
    echo "<br>";
    // outro exemplo com join.
    $n = array("h","e","n","r","i","q","u","e");
    echo join(" ",$n);
    ?>
</div>
<div>
    <h2>Função str_split();</h2>
    <?php
    // pega cada letra de uma palavra e transforma em um array.
    $nome = "henrique";
    $t = str_split($nome);
    print_r($t);
    ?>
</div>
<div>
    <h2>Função chr();</h2>
    <?php
    // retorna um caractere de acordo com o codigo ANSCII.
    echo chr(99); // retorna letra c.
    ?>
</div>
<div>
    <h2>Função ord();</h2>
    <?php
    // retorna o numero do codigo ANSCII de um caracetere.
    echo ord("c"); // retorna 67.
    ?>
</div>
</body>
</html>