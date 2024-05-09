<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Digite o nome: <input type="text" name="nome" id="">
        Digite a idade: <input type="number" name="idade" id="">
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$nome = $_GET['nome'];
$idade = $_GET ['idade'];
if($idade<18){
    echo "$nome é menor de idade";
}else{
    echo "$nome é maior de idade";
}



?>