<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title> Recebimento </title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200&display=swap');
        body{
            font-family: Raleway;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            margin-top: 50pt;
            margin-right: 300pt;
            margin-left: 300pt;
            color: white;
        }
    </style>

</head>
<body>
    <?php

    $formatoi = $_FILES["arq"]["type"];
    // Arquivo temporário diretório
    $tmp = $_FILES["arq"]["tmp_name"];

    // Destino do arquivo no site a ser definitivo
    $arq = "Imagem/" . $_FILES["arq"]["name"];

    $nome = $_REQUEST["nome"];
    $l = $_POST["logradouro"];
    $num = $_POST["numero"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $state = $_POST["estado"];
    $com = $_POST["complemento"];

    echo "<fieldset>";
    echo "<strong>Nome:</strong> $nome" . "<br>";
    echo "<strong>Logradouro:</strong> $l" . "<br>";
    echo "<strong>Número:</strong> $num" . "<br>";
    echo "<strong>Estado:</strong> $state" . "<br>";
    echo "<strong>Cidade:</strong> $cidade" . "<br>";
    echo "<strong>Bairro:</strong> $bairro" . "<br>";
    echo "<strong>Complemento:</strong> $com" . "<br>";

    echo "<br>";
    echo "<hr>";

    if($formatoi == "image/jpg" || $formatoi == "image/png"){
        if(move_uploaded_file($tmp, $arq)){
            echo "Arquivo enviado com sucesso!";
        }
    }else {
        echo "Não é possível carregar arquivos que não sejam jpg ou png, por favor reenvie em um desses formatos";
    }

    echo "<hr>";
    echo "<br>";
    echo "Sobre o arquivo:";
    echo "<br>";
    echo "<br>";
    echo "<strong>Nome:</strong> " . $_FILES["arq"]["name"] . "<br>";
    echo "<strong>Tipo:</strong> " . $_FILES["arq"]["type"] . "<br>";
    echo "<strong>Tamanho:</strong> " . $_FILES["arq"]["size"] . "<br>";
    echo "<strong>Erro:</strong> " . $_FILES["arq"]["error"] . "<br>";
    echo "<strong>Nome Temporário:</strong> " . $_FILES["arq"]["tmp_name"] . "<br>";

    ?>
</body>
</html>