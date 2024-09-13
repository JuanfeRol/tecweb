<?php

function multiplo($num){
    if ($num%5==0 && $num%7==0)
    {
        echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
    }
    else
    {
        echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
    }
}


function generacionRepetitiva(){
    #Generación de 3 números aleatorios hasta obtener una secuencia compuesta por: impar - par - impar
    $contadorIteraciones = 0;
    $flag = false;
    while(!$flag){
        $num1 = rand(1,1000);
        $num2 = rand(1,1000);
        $num3 = rand(1,1000);
        $matriz[$contadorIteraciones] = array($num1, $num2, $num3); 
        $contadorIteraciones++;
        if($num1%2!=0 && $num2%2==0 && $num3%2!=0){
            $flag = true;
            echo 'R= La secuencia de números es: '.$num1.' - '.$num2.' - '.$num3.'<br>';
        }
    }
    echo 'Se han necesitado '.$contadorIteraciones.' iteraciones para obtener la secuencia.<br>';
}

function enteroMultiplo($num){
    $entero = rand(1,1000);
    $flag = true;
    $contadorIteraciones = 0;
    while($flag){
        if($entero%$num==0){
            $flag = false;
        }else{
            $entero = rand(1,1000);
        }
        $contadorIteraciones++;
    }
    echo 'R= El número '.$entero.' es múltiplo de '.$num.'<br>';
    echo 'Se han necesitado '.$contadorIteraciones.' iteraciones para obtener el número.<br>';
}

function enteroMultiploDW($num){
    echo 'Variacion usando cilco Do-While<br>';
    $entero = rand(1,1000);
    $flag = true;
    $contadorIteraciones = 0;
    do {
        if($entero%$num==0){
            $flag = false;
        }else{
            $entero = rand(1,1000);
        }
        $contadorIteraciones++;
    } while ($flag);
    
    echo 'R= El número '.$entero.' es múltiplo de '.$num.'<br>';
    echo 'Se han necesitado '.$contadorIteraciones.' iteraciones para obtener el número.<br>';
}


?>