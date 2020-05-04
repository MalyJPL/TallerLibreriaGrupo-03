<?php

require(__DIR__ . '/../modelo/class.Producto.php'); 


pruebaImpresion();

/* obtener accion de registro de producto */
if(isset($_GET['accion'])){
    $accion = $_GET['accion'];
    
/* poner funciones con switch segun accion */
    switch($accion){
        case 'crearProducto':
        crearProducto();
        break;
        case 'eliminarProducto': //usando funcion eliminar de clase producto. Tomando idProducto
        eliminarProducto();
        break;
        case 'actualizarProducto'; //formulario que llena datos con datos de un producto dado el id
        actualizarProducto();
        case 'buscarPorCategoriaEdad': //index imprimir pero con restriccion de cateogria de edad que entra por GET
        buscarPorCategoriaEdad();
        break;
        case 'buscarPorCategoriaTema': //index iprimir categoria tema
        buscarPorCategoriaTema();
        break;
        case 'buscarPorLetras': // index imprimir categoria letras
        buscarPorLetras();
        break;
    
    }
}




//crear producto
function crearProducto(){

$libro = new Producto();  

$nombreLib = $_POST['nombreLib'];
$autor = $_POST['autor'];
$categoriaEdad = $_POST['idCategoriaEdad'];
$categoriaTema = $_POST['idCategoriaTema'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$idRegistro = $_POST['idRegistro'];
$idEstado = $_POST['idEstado'];

$imagen = $_FILES['imagen']['name'];
$carpeta = "../files/";
opendir($carpeta); #abrimos la carpeta donde queremos guardar los archivos
$dirImagen = $carpeta . $imagen; #camputaramosla img / files /impagen.png
move_uploaded_file($_FILES['imagen']['tmp_name'], $dirImagen);

$libro->crearLibro($nombreLib, $autor, $precio, $descripcion, $dirImagen, $categoriaEdad, $categoriaTema,  $idRegistro, $idEstado);

}


?>