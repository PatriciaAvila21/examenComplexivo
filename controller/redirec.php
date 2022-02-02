<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../view/admin/admin.php');
  }if($_SESSION['cargo'] == 2){
    header('location: ../view/user/user.php');
  }else if($_SESSION['cargo'] == 3){
    header('location: ../view/perfil-medico/perfil-inicial.php');
  }

 ?>
