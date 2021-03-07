<?php
  require_once 'conexao.php';
  session_start();
  //Pegando usuario para fazer o cookie e o session já que não tem oq colocar
  $user=$_POST['user'];
  $psw=$_POST['psw'];
  $psw=md5($psw);
  setcookie('user',$user, time()+3600);
  //validação do usuario

  $con;
  $query="select usuario, senha from usuario where usuario = '$user' and senha='$psw'";
  $execute=mysqli_query($con,$query);
  if(mysqli_num_rows($execute)==1){
    $row=mysqli_fetch_array($execute);
    $_SESSION['usuario_logado'] = true;
    $_SESSION['usuario']=$row['usuario'];
    echo "Sessão ativa: ".$_SESSION['usuario'];
    header('Location: index.php');
  }


    /*  $_SESSION['usuario_logado'] = true;
      echo "".$row['usuario'];
      $_SESSION['usuario'];
      $row['usuario'];
      $_SESSION['usuario'].session_id();

    }*/
    else {
      echo("Usuario e senha não conferem");
    }

    //header('Location: index.php'
  ?>
