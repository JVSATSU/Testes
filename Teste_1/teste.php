<?php
    $numeros = array(3,2,1);
     echo ordenaNumeros($numeros);
    
    function ordenaNumeros(array $numeros): int {

        foreach ($numeros as $key => $numero) {
            return (int) $numero;
        }
            
        

    }

?>