<?php

function validaLogin()
{
    include "db/sql/conexao.php";
    $loginEntra = $_POST['loginEntra'];
    $senhaEntra = $_POST['senhaEntra'];
    $query = "select * from usuario where login = '$loginEntra' and senha = '$senhaEntra'";
    $sqlLgn = mysqli_query($banco, $query);

}
validaLogin();
