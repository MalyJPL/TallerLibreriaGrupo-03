<?php

require(__DIR__ . '/../modelo/class.Producto.php'); 


pruebaImpresion();

/* obtener accion de registro de producto */
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
    case 'BuscarPorLetras': // index imprimir categoria letras
    buscarPorLetras();
    break;

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

//imprimir datos del usuario


function listarProductosAdmin(){
$contarFichas = 0;
$producto = new Producto();
$usuario = $_GET['idRegistro'];

$productos = $producto->mostrarProductos();

if($productos != 'error'){
      
    foreach($productos as $productoEncontrado){

        if($productoEncontrado[9] == $usuario){
                    
            echo '<div class="card h-100">
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#"><img class="card-img-top" src="'. $productoEncontrado[5] . '" alt="' . $productoEncontrado[2] . '"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">' . $productoEncontrado[2] . '</a>
                            </h4>
                            <h5>Autor:' .  $productoEncontrado[3] . '</h5>
                            <h5>Edad:' . $productoEncontrado[12] . '</h5>
                            <h5>Tema:' . $productoEncontrado[15]. '</h5>
                            </div>
                            <div class="card-footer">
                            <h5 class="text-muted">' . $productoEncontrado[4] . '</h5>
                            </div>
                            <div class="row mx-0">
                            <div class="list-group col-lg-6 mx-0 p-0">
                                <a href="control/productoControl.php?accion=eliminar&idProducto=$productoEncontrado[4]." class="list-group-item active">Eliminar</a>
                            </div>
                            <div class="list-group col-lg-6 mx-0 p-0">
                                <a href=" #" class="list-group-item">Editar</a>
                            </div>
                        </div>
                 </div>
                 <div>';

       }
       $contarFichas++;
    }
    //fin foreach
 } else  {
echo 'error';
    }

}


function pruebaImpresion() {
 echo "IMPRIME ALGO";

 $producto = new Producto();
$usuario = 1;

$productos = $producto->mostrarProductos();

if($productos != 'error'){
      
    foreach($productos as $productoEncontrado){

        echo $productoEncontrado[2] . '<br>';
    }
}else{

    echo 'error'
}

}

//Buscar por letras----

function buscarPorLetras(){
$letras = $_POST['barraBusqueda'];

$busqueda = new Producto(); 



}

//--- termina buscar por letras


?>