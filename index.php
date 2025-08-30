<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio da aula - Tabuada</title>

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="container-todo">

        <h>Tabuada</h>
        <p>Escolha um número abaixo para visualizar a tabuada até ele:</p>

        <div class="form">
            <form action="" method="get">

                <select name="opcaoSelecionada">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
        
                <div class="btn">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>

    </div>


    <!-- PHP -->
    <?php

        $valor= $_GET['opcaoSelecionada'];

        for($i=1;$i<=$valor;$i++)
        {
            for($j=1;$j<=10;$j++)
            {
                echo($i . "X" . $j . "=" . $i*$j . "<br>");
            }

            echo("<br>");
        }
    ?>

</body>
</html>