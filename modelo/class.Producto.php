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

    public function modificarLibro($idLibro, $nombreLib, $autor, $precio, $descripcion, $imagen, $idCategoriaEdad, $idCategoriaTema,  $idRegistro,  $idEstado){
      $db = new Conexion(); 
      
      $sql = "UPDATE producto AS p INNER JOIN categoriaTema AS ct ON p.idCategoriaTema=ct.idCategoriaTema INNER JOIN categoriaEdad AS ce ON p.idCategoriaEdad=ce.idCategoriaEdad  SET p.nombre='$nombreLib',p.autor='$autor',p.precio='$precio',p.descripcion='$descripcion',p.imagen='$imagen',p.idCategoriaEdad='$idCategoriaEdad',p.idCategoriaTema='$idCategoriaTema',p.idRegistro='$idRegistro',p.idEstado='$idEstado' WHERE `idProducto`=$idLibro";
      
      $db->query($sql) ? header("Location: ../listaProductos.php?res=registrado") : header("Location: ../listaProductos.php?res=error"); 
    }


    public function eliminarLibro($idLibro){
      $db = new Conexion(); 
      
      $sql = "DELETE FROM `producto` WHERE `producto`.`idProducto` = '$idLibro'";
      $db->query($sql) ? header("Location: ../listaProductos.php?res=eliminado") : header("Location: ../listaProductos.php?res=error"); 
    }

    public function buscarPorId($idProducto){
      $db = new Conexion(); 
      
      $sql = "SELECT p.*, ce.*, ct.* FROM producto AS p INNER JOIN categoriaTema AS ct ON p.idCategoriaTema=ct.idCategoriaTema INNER JOIN categoriaEdad AS ce ON p.idCategoriaEdad=ce.idCategoriaEdad WHERE p.idProducto='$idProducto'"
      $results = $db->query($sql);
      if($results->num_rows > 0){
        $row = mysqli_fetch_all($results);
        return $row;
     } else {
         return 'error';
     }
    
    }

    public function buscarPorCategoriaEdad($idCategoriaEdad){
      $db = new Conexion(); 
      
      $sql = "SELECT p.*, ce.*, ct.* FROM producto AS p INNER JOIN categoriaTema AS ct ON p.idCategoriaTema=ct.idCategoriaTema INNER JOIN categoriaEdad AS ce ON p.idCategoriaEdad=ce.idCategoriaEdad WHERE p.idCategoriaEdad='$idCategoriaEdad'"
      $results = $db->query($sql);
      if($results->num_rows > 0){
        $row = mysqli_fetch_all($results);
        return $row;
     } else {
         return 'error';
     }
    
    }

    public function buscarPorCategoriaTema($idCategoriaTema){
      $db = new Conexion(); 
      
      $sql = "SELECT p.*, ce.*, ct.* FROM producto AS p INNER JOIN categoriaTema AS ct ON p.idCategoriaTema=ct.idCategoriaTema INNER JOIN categoriaEdad AS ce ON p.idCategoriaEdad=ce.idCategoriaEdad WHERE p.idCategoriaTema='$idCategoriaTema'"
     
      $results = $db->query($sql);
      if($results->num_rows > 0){
        $row = mysqli_fetch_all($results);
        return $row;
     } else {
         return 'error';
     }
    }

    public function buscarPorLetras($letras){
      $db = new Conexion(); 
      
      $sql = "SELECT p.*, ce.*, ct.* FROM producto AS p INNER JOIN categoriaTema AS ct ON p.idCategoriaTema=ct.idCategoriaTema INNER JOIN categoriaEdad AS ce ON p.idCategoriaEdad=ce.idCategoriaEdad WHERE p.nombre LIKE '%$letras%' OR p.autor LIKE '%$letras%' "
      $results = $db->query($sql);
      if($results->num_rows > 0){
        $row = mysqli_fetch_all($results);
        return $row;
     } else {
         return 'error';
     }
      
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