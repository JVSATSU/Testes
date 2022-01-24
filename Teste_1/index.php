<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=§, initial-scale=1.0">
    <style>
        body {
            background-color: grey;
            text-align: center;
        }
    </style>
    <title>Teste 1</title>
</head>
<body>
<?php
    $numeros = array(6,9,1,2,8,7,4,10,3,5,"A","B","1");
  
    natsort($numeros);
    foreach ($numeros as $num) {
    
        if (filter_var($num, FILTER_VALIDATE_INT)) {
            echo $num," ";
        } else {
            echo "X "; //se quiser que eu faça algo mais sofisticado do que só um "X", é só dizer
        }


         //var_dump(is_int($num)); <-Tentei utilizar esse metodo primeiro, deu "end of file",
         //au recorri ao filter_var msm.
        
    
    }
  
    
?>
</body>
</html>