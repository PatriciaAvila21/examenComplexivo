<?php
require_once '../model/modelespecialidad.php';
class especialidadcontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $especialidad=new Modelo();

        $dato=$especialidad->mostrar("especialidad", "1");
        require_once '../view/especialidad/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/especialidad/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nombrees=$_POST['txtnomes'];
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: especialidad.php");

          }

            //ELIMINAR
            function eliminar(){
                $codespe=$_REQUEST['codespe'];
                $condicion="codespe=$codespe";
                $especialidad=new Modelo();
                $dato=$especialidad->eliminar("especialidad", $condicion);
                header("location:especialidad.php");
            }

    }
