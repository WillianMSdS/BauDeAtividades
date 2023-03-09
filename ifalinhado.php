<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF Alinhado</title>
</head>
<body>
    <form action="" method="get">
        If alinhado valor1 para testar: <input type="number" name="number1" /> <br />
        If alinhado valor2 para testar: <input type="number" name="number2" /> <br />
        <input type="submit" name="submit" value="Calcular" />
</form>
<?php
    if (isset($_GET["number1"]) and (isset($_GET["number2"])))  {
        $numero1 = $_GET["number1"];
        $numero2 = $_GET["number2"];
        if ($numero1>10){
            if ($numero2<5){
                echo 'para cair aqui o valor um é maior que 10 e o valor dois é menor que 5';
              } else {
                echo 'para cair aqui o valor um é maior que 10 e o valor dois é maior ou igual que 5';  }
            } else
             if ($numero2<5){
                echo 'para cair aqui o valor um é menor ou igual que 10 e o valor dois é menor que 5'; 
             } else {
                 echo 'para cair aqui o valor um é menor ou igual que 10 e o valor dois é maior ou igual que 5'; }

    }
    ?>
</body>
</html>