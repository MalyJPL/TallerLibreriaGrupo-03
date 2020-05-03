<?php

require(__DIR__ . '/../config/class.Conexion.php');


/* definir constructor*/
class Producto{

    public function __construct(){

    }

    
/* agregar producto */
    public function crearLibro($nombreLib, $autor, $precio, $descripcion, $imagen, $idCategoriaEdad, $idCategoriaTema,  $idRegistro,  $idEstado){
      $db = new Conexion(); 
      
      $sql = "INSERT INTO producto(nombre, autor, precio, descripcion, imagen, idCategoriaEdad, idCategoriaTema, idRegistro, idEstado) VALUES ('$nombreLib', '$autor', '$precio', '$descripcion', '$imagen', '$idCategoriaEdad', '$idCategoriaTema', '$idRegistro', '$idEstado')";
      
      $db->query($sql) ? header("Location: ../listaProductos.php?res=registrado") : header("Location: ../listaProductos.php?res=error"); 
    }

    
    //método mostrar Productos

public function mostrarProductos(){

  $db = new Conexion();
  $sql = "SELECT p.*, ce.*, ct.* FROM producto AS p INNER JOIN categoriaTema AS ct ON p.idCategoriaTema=ct.idCategoriaTema INNER JOIN categoriaEdad AS ce ON p.idCategoriaEdad=ce.idCategoriaEdad";
  $results = $db->query($sql);

  if($results->num_rows > 0){
      $row = mysqli_fetch_all($results);
      return $row;
   } else {
       return 'error';
   }
   
    }


  }
/* modificar producto / solo disponibles para usuario que lo registro*/

//buscar producto según categoria

//buscar producto según letra(s)

?>