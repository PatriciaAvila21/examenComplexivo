<?php
class Modelo{

  private $especialidad;
  private $db;

  public function __construct(){
      $this->especialidad=array();
      $this->db=new PDO('mysql:host=localhost;dbname=paty',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM especialidad";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->especialidad[]=$tabla;
      }
      return $this->especialidad;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO especialidad (nombrees)VALUES(?)";

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
