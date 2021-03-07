<!DOCTYPE html>
<?php
if(!isset($_SESSION)) session_start();
require_once 'conexao.php';
$con;

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Session com o usuario só pra ter algo né Bruno ¬¬ já que não tem campo pra mostrar
      echo "Sessão ativa: ".$_SESSION['usuario']." <br/>";
      echo "Cookie: ".$_COOKIE['user']."<br/>";
    ?>
    <a href="logout.php"> Limpar Sessão </a>
  </body>
</html>
