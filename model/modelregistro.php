<?php

class ModelRegistro extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        try{
        $query = $this->db->connect()->prepare('INSERT INTO USUARIOS (NAME, EMAIL, CLAVE) VALUES(:name, :email, :clave)');
        $query->execute(['name' => $datos['name'], 'email' => $datos['email'], 'clave' => $datos['clave']]);
        return true;
   
    }catch(PDOException $e){
          
        return false;
    }
        }
        
    }

?>