<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc;
     
    $imc = $peso / ($altura * $altura);

    echo 'O do seu IMC é: ' . $imc;
    echo '<br>';
    
    if ($imc <= 16.9){
        echo "Muito abaixo do peso";
    }elseif($imc >= 17 && $imc <=18.4){
        echo "Abaixo do peso";
    }elseif($imc >= 18.5 && $imc <= 24.9){
        echo "Peso normal";
    }elseif($imc >= 25 && $imc <= 29.9){
        echo "Acima do peso";
    }elseif($imc >= 30 && $imc <= 34.9){
        echo "Obesidade Grau I";
    }elseif($imc >= 35 && $imc <= 40){
        echo "Obesidade Grau II";
    }elseif($imc > 40){
        echo "Obesidade Grau III";
    }else {
        echo "Valor incorreto";
    }

?>