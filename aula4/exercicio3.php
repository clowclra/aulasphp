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
        Digite o nome: <input type:"text" name="nome" id=""><br><br>
        Digite o peso:  <input type:"number" name="peso" id=""><br><br>
        Digite a altura: <input type:"number" name="altura" id=""><br><br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$nome=$_GET['nome'];
$peso=$_GET['peso'];
$altura=$_GET['altura'];
$Imc=$peso / ($altura*$altura);
//esse é para tirar alguns numeros decimais
$Imc=number_format($Imc,2);

echo "$nome seu Imc é: $Imc e é classificado como: ";

if($Imc<=16.9){
    echo "muito abaixo do peso";
}else if($Imc>=17 && $Imc <= 18.4){
     echo "Abaixo do peso";
}else if($Imc>=18.5 && $Imc <= 24.9){
    echo "Peso normal";
}else if($Imc>=25 && $Imc <= 29.9){
    echo "Acima do peso";
}else if($Imc>=30 && $Imc <= 34.9){
    echo "Obesidade grau 1";
}else if($Imc>=35 && $Imc <= 40){
    echo "Obesidade grau 2";
}else{
    echo "Obesidade grau 3";
}


?>