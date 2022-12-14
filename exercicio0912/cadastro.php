<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro IMC</title>
    <!-- meu css -->
    <link href="/css/style.css">
    <!-- w3css -->
    
</head>

<body id="fundo">
    <div>
        <img id="topo" src="images/imcGrafico.png">
    </div>
    <div>

        <form method="post" action="produtos.php">
            <p>
                Preencha os campos do formulário de cadastro para prosseguir.
            </p>

            <table>

                <tr>
                    <td> Login: </td>
                    <td> <input type="text" name="nome" required placeholder="digite seu nome"> </td>
                </tr>
                <tr>
                    <td> Senha: </td>
                    <td> <input type="password" name="senha" required placeholder="digite uma senha"> </td>
                </tr>
                <tr>
                    <td> Confirmar senha: </td>
                    <td> <input type="password" name="confirma_senha" required placeholder="repetir a senha"> </td>
                </tr>
                <tr>
                    <td> <input type="reset" value="Limpar"> </td>
                    <td> <input type="submit" value="Cadastrar"> </td>
                    <td> <button><a href="">Sou cadastrado</a></button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>