<?php
function calculaImc()
{
    include "db/sql/conexao.php";
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $genero = $_POST['genero'];
    $imc = ($altura ** $altura) / $peso;
    if ($sqlImc && mysqli_num_rows($sqlImc)>0) {
        $query = "select id from usuario;";
        $sqlFk = mysqli_query($banco, $query);
        $fk = $sqlFk;
        $sqlImc = mysqli_query($banco, $query);

        if ($imc < 18.5){
            
            echo ("Abaixo de peso ideal");
            $query = "insert into imc values = ('null','$loginEntra','$senhaEntra', '$genero', '$fk');";
            $sqlImc = mysqli_query($banco, $query);
        }
        elseif($imc >=18.5 && $imc <= 24.9){
            echo ("Peso ideal");
            $query = "insert into imc values = ('null','$loginEntra','$senhaEntra', '$genero', '$fk');";
            $sqlImc = mysqli_query($banco, $query);
        }
        elseif($imc >=25 && $imc <= 29.9){
            echo ("Acima do peso ideal");
            $query = "insert into imc values = ('null','$loginEntra','$senhaEntra', '$genero', '$fk');";
            $sqlImc = mysqli_query($banco, $query);
        }
        elseif($imc >=30 && $imc <= 34.9){
            echo ("Obesidade I");
            $query = "insert into imc values = ('null','$loginEntra','$senhaEntra', '$genero', '$fk');";
            $sqlImc = mysqli_query($banco, $query);
        }
        elseif($imc >=35 && $imc <= 39.9){
            echo ("Obesidade II");
            $query = "insert into imc values = ('null','$loginEntra','$senhaEntra', '$genero', '$fk');";
            $sqlImc = mysqli_query($banco, $query);
        }
        elseif($imc >= 40){
            echo ("Obesidade III");
            $query = "insert into imc values = ('null','$loginEntra','$senhaEntra', '$genero', '$fk');";
            $sqlImc = mysqli_query($banco, $query);
        }
    } else {
        echo("*ERRO*");
    }
}
calculaImc();
