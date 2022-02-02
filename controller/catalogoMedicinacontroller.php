<?php
require_once '../model/modelcatalogoMedicina.php';
class catalogoMedicinacontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $catalogoMedicina=new Modelo();

        $dato=$catalogoMedicina->mostrar("catalogoMedicina", "1");
        require_once '../view/catalogoMedicina/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/catalogoMedicina/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nombre=$_POST['nombre'];
                $alm->f_elavo=$_POST['f_elavo'];
                $alm->f_caduci=$_POST['f_caduci'];
				$alm->f_ingr=$_POST['f_ingr'];
				
				
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: catalogoMedicina.php");

          }

            //ELIMINAR
            function eliminar(){
                $codcit=$_REQUEST['codcit'];
                $condicion="codcit=$codcit";
                $catalogoMedicina=new Modelo();
                $dato=$catalogoMedicina->eliminar("catalogoMedicina", $condicion);
                header("location:catalogoMedicina.php");
            }

    }
