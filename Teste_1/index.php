<?php


    $array  = array(6, 9, 1, 2, 8, "A", 7, 4, 10, 3, 5, 12, "E", "C", 75, 99, "ABCDEFG", 1.5, 100, 111, 149, 1414);

    function ordenaNumeros(array $num_array): void
    {
        for ($i = 0; $i < count((array)$num_array); $i++) 
        {


            if ($i < count((array)$num_array) - 1) //compara o numero atual e anterior até o ultimo indice do array
            {
                $proximo = $i + 1; //proximo = indice atual + 1
                $troca = NULL; //esta variavel é utilizada para fazer a mundança dos indices do array (aceito sugestões de nome pra variavel).
                for ((int)$atual = 0; (int)$atual < count((array)$num_array); (int)$atual++)// enquanto o indice atual for menor que o tamanho do array,
                {                                                                           // irá ser verificado se o indice atual é maior que o proximo indice.
                    if ($num_array[$atual] > $num_array[$proximo]) 
                    {
                        $troca = $num_array[$atual];                 //variavel troca recebe o indice atual              -------> 2(troca) ----
                        $num_array[$atual] = $num_array[$proximo];   //o indice atual se torna o proximo                |                      |
                        $num_array[$proximo] = $troca;               //e o proximo agora é o indice atual           2(atual)              1(proxima)
                    }                                                //                                                 |                      |
                }                                                    //                                                  ----------- 1 <-------
            }
        }


        for ((int) $i = 0; $i < count($num_array); (int) $i++) // este loop é para verificar se "elemento" do array é do tipo Integer
        {

            if (is_int($num_array[$i])) // caso o indice contenha um numero inteiro ele pode ser exibido
            {
                echo var_dump($num_array[$i]) . ' ';
            } else {
                $num_array[$i] = NULL;// caso seja qualquer outro tipo ele tem valor nulo no array.
            }
        }
    }

    return ordenaNumeros($array);
?>
