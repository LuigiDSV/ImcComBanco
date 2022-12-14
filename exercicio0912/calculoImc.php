<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IniciaL IMC</title>
    <!-- meu css -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- w3css -->
</head>

<body>
    <div>
        <div class="page">
            <div class="linha">
                <!-- sistema de login com estatistica bonitonho papapa -->
                <div>
                    <img id="topo" src="images/imcGrafico.png">
                    <h3>Vamos calcular seu IMC?</h3>
                    <p class="linha">Para realizar o calculo insira os dados abaixo.</p>
                </div>
                <div>
                    <form method="post" action="resultadoImc.php">
                        <table>
                            <!-- <tr>
                                <td>//idade e sexo</td>
                                <td> <input type="text" name="" required placeholder=""> </td>
                            </tr> -->
                            <tr>
                                <td> Altura (em metros): </td>
                                <td> <input type="text" name="altura" required placeholder="digite sua altura"> </td>
                            </tr>
                            <tr>
                                <td> Peso (em kilos): </td>
                                <td> <input type="text" name="peso" required placeholder="digite seu peso"> </td>
                            </tr>
                            <tr>
                                <td> <input type="reset" value="Limpar"> </td>
                                <td> <input type="submit" value="Calcular"> </td>
                                <td> <button><a href="">Sou cadastrado</a></button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <img src="" alt="">
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>