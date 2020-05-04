<?php

require(__DIR__ . '/../modelo/class.Producto.php');


listarProductosAdmin();

/* obtener accion de registro de producto */
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];

    /* poner funciones con switch segun accion */
    switch ($accion) {
        case 'crearProducto':
            crearProducto();
            break;
        case 'borrar': //usando funcion eliminar de clase producto. Tomando idProducto
            borrar();
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


function borrar()
{
    $libro = new Producto();

    $idLib = $_GET['idProd'];


    $libro->borrarLibro($idLib);
}

//crear producto
function crearProducto()
{

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


function listarProductosAdmin()
{
    $contarFichas = 0;
    $producto = new Producto();
    $usuario = $_SESSION['user']['idRegistro'];

    $productos = $producto->mostrarProductos();

    if ($productos != 'error') {

        //imprimir datos del usuario

        foreach ($productos as $productoEncontrado) {

            if ($productoEncontrado[9] == $usuario) {


                echo '
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="row">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="' . $productoEncontrado[5] . '" alt="' . $productoEncontrado[2] . '"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Inventoras y sus inventos</a>
                                </h4>
                                <h5>  "Autor:" '  .  $productoEncontrado[2] . ' </h5>
                                <h5>  "Edad:" ' . $productoEncontrado[11] . '</h5>
                                <h5> "Tema:" ' . $productoEncontrado[14] . ' </h5>

                            </div>
                            <div class="card-footer">
                                <h5 class="text-muted"> "Precio:"' . $productoEncontrado[3] . '</h5>
                            </div>
                            <div class="row mx-0">
                            <div class="list-group col-lg-6 mx-0 p-0">
                            <form method="POST" action="#">
                            <input type="hidden" value="' . $productoEncontrado[0] .
                    '" name="idProd"/>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <input type="submit" value="Eliminar"/></a>
                    </form>
                          </div>
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                              Modificar
                            </a>
                          </div>
                            </div>
                        </div>
                    </div>

                </div>';
            }
            $contarFichas++;
        }
        //fin foreach
    } else {
        echo 'error';
    }
}



function pruebaImpresion()
{
    echo "IMPRIME ALGO";

    $producto = new Producto();
    $usuario = 1;

    $productos = $producto->mostrarProductos();

    if ($productos != 'error') {

        foreach ($productos as $productoEncontrado) {

            echo $productoEncontrado[2] . '<br>';
        }
    } else {

        echo 'error';
    }
}
?>


