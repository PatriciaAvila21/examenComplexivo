<?php
class Modelo{

  private $pacientes;
  private $db;
  public $codpaci;
  public $dnipa;
  public $nombrep;
  public $apellidop;
  public $seguro;
  public $tele;
  public $sexo;
  public $nacionalidad;
  public $email;
  public $clave;
  public $cargo;
  public $estado;
  public $fecha_create;
  public $fechanaci;
  public $direccion;
  public $residencia;


  public function __construct(){
      $this->pacientes=array();
      $this->db=new PDO('mysql:host=localhost;dbname=paty',"root","");
  }




  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM pacientes";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->pacientes[]=$tabla;
      }
      return $this->pacientes;
    }




    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO pacientes (dnipa,nombrep,apellidop,seguro,tele,sexo,nacionalidad,usuario,password,estado,fechanaci,direccion,residencia)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->nombrees));

    }catch (Exception $e) {

      die($e->getMessage());
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
