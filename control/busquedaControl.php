<?php

require(__DIR__ . '/../modelo/class.Producto.php'); 


/* obtener accion de registro de producto */
if(isset($_GET['accion'])){
    $accion = $_GET['accion'];
    
/* poner funciones con switch segun accion */
    switch($accion){
        case 'buscarPorCategoriaEdad': //index imprimir pero con restriccion de cateogria de edad que entra por GET
        $results = buscarPorCategoriaEdad();
        break;
        case 'buscarPorCategoriaTema': //index iprimir categoria tema
         $results = buscarPorCategoriaTema();
        break;
        case 'buscarPorLetras': // index imprimir categoria letras
         $results = buscarPorLetras();
        break;
    }
}

if(isset($results)){
mostrarFichasBuscadas($results);
}






//Buscar por letras----

function buscarPorLetras(){
$letras = $_POST['barraBusqueda'];

$busqueda = new Producto(); 

$results = $busqueda->buscarPorLetras($letras);

return $results;
};


function mostrarFichasBuscadas($results){

    if ($results != 'error') {

        foreach($results as $productoEncontrado){
        
            echo  '
            <div class="col-lg-12">

            <div class="row my-4">
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="'. $productoEncontrado[6] .'" alt="' .$productoEncontrado[2] . '"></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">' . $productoEncontrado[2] . '</a>
                      </h4>
                      <h5>Autor: ' . $productoEncontrado[3] . '</h5>
                      <h5>Edad: ' . $productoEncontrado[12] . '</h5>
                      <h5>Tema: ' . $productoEncontrado[14] . '</h5>
                    </div>
                    <div class="card-footer">
                      <h5 class="text-muted">Precio COP $productoEncontrado[4]</h5>
                    </div>
                 </div>
            </div>
            </div>';
    
            
        }
    } else {
        echo 'No hay productos disponibles con su criterio de búsqueda';
    }
    header("Location: ../index.php?res=busqueda");
};