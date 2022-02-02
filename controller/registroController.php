<?php
require_once '../model/modelregistro.php';

  $name   = $_POST['name'];
  $email  = $_POST['email'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];
 
 

  if (empty($name) || empty($email) || empty($clave) || empty($clave2))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../model/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $email, $clave);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }


  class RegistroController extends Controller{ 
   
    function __construct(){
      parent::__construct();
      $this->view->mensaje ="";
    
     }
    
     function render(){
      $this->view->render('view/registro');
    }
    
     function inscribirUsuario(){
      /* $ci = $_POST['ci'];
       $email = $_POST['email'];
       $password = $_POST['password'];*/
       $name   = $_POST['name'];
       $email  = $_POST['email'];
       $clave  = $_POST['clave'];
       //$clave2 = $_POST['clave2'];
    
       $mensaje ="";
    
       if($this->model->insert(['name' => $name , 'email' => $email, 'clave' => $clave])){
       
        $mensaje = "usuario creado";
     }else{
      $mensaje = "El usuario ya exite";
     }
     $this->view->mensaje = $mensaje;
     $this->render();
     }
    
    }






?>
