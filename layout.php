<?php 
session_start();
include('verifica_login.php');
include("conexao.php");
ini_set('default_charset','UTF-8');

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suporte Informatica</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body class="teste">
    <header>
      <nav>
        <a class="logo" href="home.php">Suporte 1° CGEO</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="home.php">Home</a></li>
          <li><a href="simatex.php">Simatex</a></li>
          <li><a href="vpn.php">Vpn</a></li>
          <li><a href="impressora.php">Impressora</a></li>

          <li><a href="certificados.php">Certificados</a></li>

          <li><a href="antivirus.php">antivirus</a></li>
        </ul>

       <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>


       <?php 
       if ($_SESSION['tp_user'] == 'admin') {
        echo'<h2><a href="cadastro.php">Gerenciar</a></h2>';
       }
      
       ?> 
       <h2><a href="logout.php">Sair</a></h>
      </nav>
    </header>

  </body>
  <footer>
    
    
  </footer>
</html>