<?php
  $db_serv='localhost';
  $db_user='root';
  $db_psw='';
  $db='dbacademia';
  $con= mysqli_connect($db_serv,$db_user,$db_psw,$db);
  if(mysqli_connect_errno()) echo "Erro ao conectar com o servidor".mysqli_connect_error();
  
  ?>
