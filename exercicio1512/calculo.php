<?php
function calculaImc()
{
    include "db/sql/conexao.php";
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $genero = $_POST['genero'];
    $imc = $peso / (pow($altura, 2));

    $query = "select id from usuario ;";
    $sqlFk = mysqli_query($banco, $query);
    $fk = $sqlFk;

    $sqlImc = mysqli_query($banco, "insert into imc values ('null','$peso','$altura', '$genero', '$imc', '$fk')");
    $sqlImc;
    echo ($imc);

    if ($imc < 18.5) {
        echo ("Abaixo de peso ideal");
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo ("Peso ideal");
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo ("Acima do peso ideal");
    } elseif ($imc >= 30 && $imc <= 34.9) {
        echo ("Obesidade I");
    } elseif ($imc >= 35 && $imc <= 39.9) {
        echo ("Obesidade II");
    } elseif ($imc >= 40) {
        echo ("Obesidade III");
    } else {
        echo ("*ERRO*");
    }
}
calculaImc();
