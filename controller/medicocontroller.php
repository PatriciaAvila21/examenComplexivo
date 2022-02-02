<<?php
require_once '../model/modelmedico.php';
class medicocontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $medico=new Modelo();

        $dato=$medico->mostrar("medico", "1");
        require_once '../view/medico/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/medico/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->dnidoc=$_POST['txtdni'];
                $alm->nomdoc=$_POST['txtnomd'];
                $alm->apedoc=$_POST['txtapedo'];
				$alm->codespe=$_POST['cboespe'];
				$alm->sexo=$_POST['cbosex'];
				$alm->telefo=$_POST['txttele'];
				$alm->fechanaci=$_POST['txtfech'];
				$alm->correo=$_POST['txtcorr'];
				$alm->naciona=$_POST['cbonaci'];
				$alm->estado=$_POST['cboesta'];
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: medico.php");

          }

            //ELIMINAR
            function eliminar(){
                $coddoc=$_REQUEST['coddoc'];
                $condicion="coddoc=$coddoc";
                $medico=new Modelo();
                $dato=$medico->eliminar("medico", $condicion);
                header("location:medico.php");
            }

    }
