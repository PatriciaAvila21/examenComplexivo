<?php
require_once '../model/modelpacientes.php';
class pacientescontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $pacientes=new Modelo();

        $dato=$pacientes->mostrar("pacientes", "1");
        require_once '../view/pacientes/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../view/pacientes/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->dnipa=$_POST['txtdnia'];
				$alm->nombrep=$_POST['txtnomb'];
				$alm->apellidop=$_POST['txtapell'];
				$alm->seguro=$_POST['cbosegu'];
				$alm->tele=$_POST['txttele'];
                $alm->nacionalidad=$_POST['cbonacionalidad'];
				$alm->sexo=$_POST['cbosex'];
				$alm->usuario=$_POST['txtusu'];
				$alm->password=$_POST['txtpass'];
				$alm->estado=$_POST['cboesta'];
                $alm->fechanaci=$_POST['txtfech'];
                $alm->direccion=$_POST['txtdir'];
                $alm->residencia=$_POST['txtres'];
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: pacientes.php");

          }

            //ELIMINAR
            function eliminar(){
                $codpaci=$_REQUEST['codpaci'];
                $condicion="codpaci=$codpaci";
                $pacientes=new Modelo();
                $dato=$pacientes->eliminar("pacientes", $condicion);
                header("location:pacientes.php");
            }

    }
