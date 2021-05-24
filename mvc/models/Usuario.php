<?php
require_once 'modelobase.php';
//crear el modelo del usuario
class Usuario extends ModeloBase{
    public $nombre;
    public $apellido;
    public $email;
    
    public function __construct(){
        //parent espara heredar de una clase
        parent::__construct();
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function Create(){
        $sql = "INSERT INTO usuarios(nombre,apellido,email) VALUES ('{$this->nombre}','{$this->apellido}',
        '{$this->email}')";
        $guardado = $this->db->query($sql);
        return $guardado;
    }

//   public function Delete($nombre){
  //     $sql = "DELETE FROM usuarios where nombre='$nombre'";
    //   $guardar = $this->db->query($sql);
      // return $guardar;
       //return mysqli_query($this->db,$sql);
  // }
    
    public function Modificar($id){
       $sql = "UPDATE usuarios SET nombre='{$this->nombre}', apellido='{$this->apellido}', email='{$this->email}' WHERE id=$id";    
       $modificado = $this->db->query($sql);
       return $modificado;
     }

}


?>