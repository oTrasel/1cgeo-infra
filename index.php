<?php
session_start();
ini_set('default_charset','UTF-8');


?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/login.css">

        <title>Suporte Informática</title>

    </head>

    <body background="img/img.jpg">

        <div id="login">

            <form action="login.php" method="POST" class="card"> 

                <div class="card-header">

                    <h2>Suporte Informática</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="usuario">Usuário</label>

                        <input type="text" name="usuario" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" name="senha" autocomplete="off">

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="login" class="submit">


                </div>

            </form>

        </div>

    </body>

</html>

