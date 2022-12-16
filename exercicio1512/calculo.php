<?php
function calculaImc()
{
    include "db/sql/conexao.php";
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $genero = $_POST['genero'];
    $imc = $peso / (pow($altura, 2));
    $sqlImc = mysqli_query($banco, "insert into imc values (null,'$peso','$altura', '$genero', '$imc')");
    $sqlImc;


    if ($imc < 18.5) {
        echo ("<p style='color:black;font-size:250%;text-align:center;padding-top:15%;font:bold'>Abaixo do peso ideal</p><br>");
        echo ("<p style='color:yellow;font-size:250%;text-align:center;padding-top:5%;font:bold'>IMC: " . $imc . "</p>");
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo ("<p style='color:black;font-size:250%;text-align:center;padding-top:15%;font:bold'>Peso ideal</p><br>");
        echo ("<p style='color:green;font-size:250%;text-align:center;padding-top:5%;font:bold'>IMC: " . $imc . "</p>");
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo ("<p style='color:black;font-size:250%;text-align:center;padding-top:15%;font:bold'>Acima do peso ideal</p><br>");
        echo ("<p style='color:Orange;font-size:250%;text-align:center;padding-top:5%;font:bold'>IMC: " . $imc . "</p>");
    } elseif ($imc >= 30 && $imc <= 34.9) {
        echo ("<p style='color:black;font-size:250%;text-align:center;padding-top:15%;font:bold'>Obesidade I</p><br>");
        echo ("<p style='color:DarkOrange;font-size:250%;text-align:center;padding-top:5%;font:bold'>IMC: " . $imc . "</p>");
    } elseif ($imc >= 35 && $imc <= 39.9) {
        echo ("<p style='color:black;font-size:250%;text-align:center;padding-top:15%;font:bold'>Obesidade II</p><br>");
        echo ("<p style='color:OrangeRed;font-size:250%;text-align:center;padding-top:5%;font:bold'>IMC: " . $imc . "</p>");
    } elseif ($imc >= 40) {
        echo ("<p style='color:black;font-size:250%;text-align:center;padding-top:15%;font:bold'>Obesidade III</p><br>");
        echo ("<p style='color:red;font-size:250%;text-align:center;padding-top:5%;font:bold'>IMC: " . $imc . "</p>");
    } else {
        echo ("*ERRO*");
        echo ("<p style='color:red;font-size:250%;text-align:center;padding-top:15%;font:bold'>*ERRO*</p>");
    }
}
calculaImc();
