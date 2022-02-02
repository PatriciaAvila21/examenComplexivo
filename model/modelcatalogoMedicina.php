<?php
class Modelo{

  private $catalogoMedicina;
  private $db;
  public $codcat;
  public $nombre;
  public $f_elavo;
  public $f_caduci;
  public $f_ingr;
 
  
  
  

  public function __construct(){
      $this->catalogoMedicina=array();
      $this->db=new PDO('mysql:host=localhost;dbname=paty',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM catalogoMedicina";
     
      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->catalogoMedicina[]=$tabla;
      }
      return $this->catalogoMedicina;
    }




    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO catalogoMedicina (dates,hour,codpaci,coddoc,codespe,estado, motivocit)VALUES(?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->dates,$data->hour,$data->codpaci,
	  $data->coddoc,$data->codespe,$data->estado));

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
	
	public function llenarmedico(){



    try{
      $consulta="SELECT * FROM medico";
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
