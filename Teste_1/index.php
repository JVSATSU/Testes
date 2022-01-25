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
    
    
    $array  = array(6, 9, 1, 2, 8, "A", 7, 4, 10, 3, 5, 12, "E", "C", 75, 99, "ABCDEFG", 1.5, 100,111);
    ordenaNumeros($array);
    
    function ordenaNumeros (array $num_array)
    {
        $nulo = NULL;
        for ($i = 0; $i < count($num_array); $i++) 
        {



            if ($i < count($num_array) - 1) 
            {
                $prox = $i + 1;


                for ($ant = 0; $ant < count($num_array); $ant++) 
                {
                    if ($num_array[$ant] > $num_array[$prox]) 
                    {
                        $nulo = $num_array[$ant];
                        $num_array[$ant] = $num_array[$prox];
                        $num_array[$prox] = $nulo;
                    }
                }
            }
        }


        for ($i = 0; $i < count($num_array); $i++) 
        {

            if (!is_int($num_array[$i])) 
            {
                $num_array[$i] = NULL;
            }

            echo $num_array[$i], ' ';
        }
    }

    ?>
</body>

</html>