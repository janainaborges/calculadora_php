<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opcao= $_POST['opcao'];

    /* a escolha do usuário */
    switch($opcao) {

        case 'soma' :
             $resultado = $num1+$num2; 
             echo "A soma é: ".$resultado;             
             break;

        case 'sub' : 
            $resultado = $num1-$num2; 
            echo "A subtração é: " .$resultado;            
            break;

        case 'mult' : 
            $resultado = $vnum1*$num2; 
            echo "A multiplicação é: " .$resultado;          
            break;

        case 'dividir' : 
            $resultado = $num1/$num2;        
            echo "A divisão é: ".$resultado;             
            break;
    }

   


?>