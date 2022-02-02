<?php
class Modelo{

  private $medico;
  private $db;
  public $coddoc;
  public $dnidoc;
  public $nomdoc;
  public $apedoc;
  public $codespe;
  public $sexo;
  public $telefo;
  public $fechanaci;
  public $correo;
  public $naciona;
  public $estado;
  
  

  public function __construct(){
      $this->medico=array();
      $this->db=new PDO('mysql:host=localhost;dbname=paty',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT medico.coddoc, medico.dnidoc, medico.nomdoc,medico.apedoc,especialidad.nombrees, medico.sexo, medico.telefo, medico.fechanaci, medico.correo, medico.naciona,medico.estado, medico.fecha_create FROM medico INNER JOIN especialidad ON medico.codespe = especialidad.codespe";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->medico[]=$tabla;
      }
      return $this->medico;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO medico (dnidoc,nomdoc,apedoc,codespe,sexo,telefo,fechanaci, correo,naciona,estado)VALUES(?,?,?,?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->dnidoc,$data->nomdoc,$data->apedoc,
	  $data->codespe,$data->sexo,$data->telefo,$data->fechanaci,$data->correo,$data->naciona,$data->estado));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
    public function llenarespecialidad(){



    try{
      $consulta="SELECT * FROM especialidad";
      $smt=$this->db->prepare($consulta);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);


    }catch(Exception $e){


    }

    }

   
	
	
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
