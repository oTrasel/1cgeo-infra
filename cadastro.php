<?php
include("layout.php");
ini_set('default_charset','UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Suporte Técnico 1°CGEO</title>
     <link rel="stylesheet" href="css/loginn.css" />
    
</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <center>
                    <br><br><br><br>
                    <a href="index.php"><button type="submit" class="button is-block is-link is-large is-fullwidth">Ir para Login</button></a><br>
                    <br>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="sucesso">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p><br>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="falha">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p><br>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>



                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="dados" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="dados" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="dados" type="password" placeholder="Senha">
                                </div>

                                
                                 
                            </div>
                            
                          <br><label for="teste">Tipo de Usuario:</label>

                                 <select name="selectuser"  >
                                    <option value="normal">Normal</option>
                                    <option value="admin">Admin</option>
                                </select> <br><br>
                           
                           <a href="#">  <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button></a><br><br>
                          


                        </form>
                       <a href="listar.php"> <button type="submit" class="button is-block is-link is-large is-fullwidth">Listar usuarios cadastrados</button></a>
                    </div>


                    </center>
                </div>
            </div>
        </div>
    </section>
</body>
</html>