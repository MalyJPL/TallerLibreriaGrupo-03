<?php

require(__DIR__ . '/../config/class.Conexion.php');


/* definir constructor*/
class Producto{

    public function __construct(){

    }
    public function ($nombreLib, $autor, $categoriaEdad, $categoriaTema, $descripcion, $precio, $imagen, $idRegistro, $idEstado){
      $db = new Conexion(); 
      
      $sql = "INSERT INTO producto (producto, nombre, autor, precio, descripcion, imagen, idCategoriaEdad, idCategoriaTema, idRegistro, idEstado) VALUES ($nombreLib, $autor, $categoriaEdad, $categoriaTema, $descripcion, $precio, $imagen ,$idRegistro, $idEstado) ";

      $db->query($sql) ? header('Location: ../index.php?res=registrado') : header('Location: ../index.php?res=error'); 
    }

   
    }
}

/* agregar producto */

/* modificar producto / solo disponibles para usuario que lo registro*/

//buscar producto según categoria

//buscar producto según letra(s)



?>