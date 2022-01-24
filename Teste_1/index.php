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
    $array = array(6,9,1,2,8,"A",7,4,10,3,5,12,2.15,"E","C",75);
	ordena($array);
	
	function ordena($numeros){
        $nulo = null;
        for($i = 0; $i < count($numeros); $i++){  
        
            if (filter_var($numeros[$i], FILTER_VALIDATE_INT)) {
                
            } else {
                $numeros[$i] = NULL;
            }
        
            if($i < count($numeros) - 1)
                $prox = $i + 1;
            
            
                for($ant = 0; $ant < count($numeros); $ant++){
                if($numeros[$ant] > $numeros[$prox]){
                    $nulo = $numeros[$ant];
                    $numeros[$ant] = $numeros[$prox];
                    $numeros[$prox] = $nulo;
                }
            }
        }
        
        for($i = 0; $i < count($numeros); $i++){
            
            
            echo $numeros[$i], ' ';
        }
    }

    
    
    
    
?>
</body>
</html>