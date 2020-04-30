<?php

require(__DIR__ . '/../config/class.Conexion.php');


/* definir constructor*/


/* agregar registro */

/* modificar registro / solo disponibles para usuario tipo superAdmin*/


class Administrador{

    public function __construct(){

    }
    public function agregarAdmin($nombre, $apellido, $correo, $clave, $direccion, $telefono){
      $db = new Conexion(); 
      
      $sql = "INSERT INTO registro (nombre, apellido,correo, clave, direccion, telefono) VALUES ('$nombre', '$apellido', '$correo', '$clave', '$direccion', '$telefono') ";

      $db->query($sql) ? header('Location: ../index.php?res=registrado') : header('Location: ../index.php?res=error'); 
    }

   
    public function ingresar($correo, $clave){
      $db = new Conexion();

      $sql = "SELECT * FROM registro WHERE correo= '$correo' AND clave = '$clave' ";
      
      $result = $db->query($sql);  
      if($result->num_rows > 0 ){
         $row = $result -> fetch_assoc();  
         return $row;
      }else {
          return 'error';  
      }

    }
}


?>