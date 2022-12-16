<?php

function cadastro()
{
    include "db/sql/conexao.php";
    $nome = $_POST['nomeCadastro'];
    $lgnCadastro = $_POST['loginCadastro'];
    $snhCadastro = $_POST['senhaCadastro'];
    $cnfSenhaCadastro = $_POST['confirmaSenhaCadastro'];
    if (isset($lgnCadastro) && isset($nome) && $snhCadastro == $cnfSenhaCadastro) {
        echo ("<p style='color:green;font-size:250%;text-align:center;padding-top:15%;font:bold'>Cadastro realizado com sucesso!</p>");
        $sql = mysqli_query($banco, "insert into usuario values(null,'$nome','$lgnCadastro','$snhCadastro');");
        $sql;
        echo("<META http-equiv='refresh' content='2;URL=templates/login.html'>");
    } else {
        echo ("<p style='color:red;font-size:250%;text-align:center;padding-top:15%;font:bold'>*ERRO*</p>");
        echo ("<p style='color:black';font-size:250%;text-align:center;padding-top:15%;font:bold'>Algo não saiu como o esperado. Verifique os dados inseridos e tente novamente.</p>");
        echo("<META http-equiv='refresh' content='2;URL=templates/cadastro.html'>");
    }
}
cadastro();
