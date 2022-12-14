<?php
$banco  = mysqli_connect("localhost", "root", "", "dados_imc") or die("Conexão falhou...");
if (!$banco) {  
    echo ("Causa do erro: ".mysqli_connect_error());
} else {
}