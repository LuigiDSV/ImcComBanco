<?php

function cadastro()
{
    include "db/sql/conexao.php";
    $nome = $_POST['nomeCadastro'];
    $lgnCadastro = $_POST['loginCadastro'];
    $snhCadastro = $_POST['senhaCadastro'];
    $cnfSenhaCadastro = $_POST['confirmaSenhaCadastro'];

    if (isset($lgnCadastro) && isset($nome) && $snhCadastro == $cnfSenhaCadastro) {
        echo ("Cadastro realizado com sucesso!");
        $sql = mysqli_query($banco, "insert into usuario values(null,'$nome','$lgnCadastro','$snhCadastro');");
        $sql;
    } else {
        echo ("*ERRO*");
        echo ("Algo não saiu como o esperado. Verifique os dados inseridos e tente novamente.");
    }
}
cadastro();
