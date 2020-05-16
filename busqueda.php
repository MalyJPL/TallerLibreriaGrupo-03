<?php
// Activamos en esta pestaña la sesion de nuestro usuario
session_start();
if(isset($_SESSION['user'])){$_SESSION['user'];}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cuenta sueños ♫♪</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">




    <link href=https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300" rel="stylesheet" type="text/css">

    <!--  css  -->


    <!-- Bootstrap core CSS  Camilo-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template Camilo -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- ------------fin ---- -->

    <!-- ------------RIC   inicio ---- -->




  
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
<!-- iconos css -->


    <!-- ------------RIC   fin   ---- -->




</head>

<body>

    <!--Header inicio-->
    <div class="barra">
        <div class="container">
            <div class="row">
                <div class="search">
                    <div class="header-logo">
                        <a href="index.php">
                            <img src="img/logo.png" alt="" width="400px">
                        </a>
                    </div>
                    <div class="layer-4">
                        <form method="POST" action="busqueda.php?accion=buscarPorLetras" class="title-4">
                            <input name="barraBusqueda" id="barraBusqueda" type="text" placeholder="¿Que libro esta buscando?">
                            <button type="submit"><i class="fa fa-search"></i><img src="img/lu.png" alt=""width="20px"></button>
                        </form>            
                    </div>
                </div>
</div>
<div class="row">
                <div class="col-md-19 col-sm-32 hidden-xs">
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">
                                <li><a href="index.php">INICIO</a></li>

                                <!-- get -->

                                <li><a href="#">Por tema</a>
                                <ul class="sub-menu">
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaTema&tema=1">Social y valores </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaTema&tema=2">Fantasía </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaTema&tema=3">Imaginación </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaTema&tema=4">Pensamiento lógico </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaTema&tema=5">Naturalista </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaTema&tema=6">lenguaje </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Por edad</a>
                                    <ul class="sub-menu">
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaEdad&edad=1">0 a 2 años </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaEdad&edad=2">3 a 6 años </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaEdad&edad=3">6 a 8 años </a></li>
                                        <li><a href="busqueda.php?accion=buscarPorCategoriaEdad&edad=4">8 a 12 años </a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTÁCTENOS</a></li>
                            <?php
                                include __DIR__ . '/navAdmin.php';
                              ?>  
                                
                                </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------- imagenes--------  Camilo---- -->


    <!-- Navigation  barra de navegacion -->

 

    <!-- contenido -->
    <div class="container">
    <div class="row">
<?php
require(__DIR__ . '/modelo/class.Producto.php'); 


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

function buscarPorCategoriaEdad(){
  $busqueda = new Producto(); 
  $idCategoriaEdad = $_GET['edad'];
$results = $busqueda->buscarPorCategoriaEdad($idCategoriaEdad);

return $results;
}

function buscarPorCategoriaTema(){
  $busqueda = new Producto(); 
  $idCategoriaTema = $_GET['tema'];
$results = $busqueda->buscarPorCategoriaTema($idCategoriaTema);

return $results;
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
        
          echo '
<div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="productoPerfil.php?idProd=' . $productoEncontrado[0] . '"><img class="card-img-top" src="' . $productoEncontrado[5] . '" alt="' . $productoEncontrado[2] . '"></a>
          <div class="card-body">
              <h4 class="card-title">
                  <a href="#">' . $productoEncontrado[1] . '</a>
              </h4>
              <h5>  "Autor:" '  .  $productoEncontrado[2] . ' </h5>
              <h5>  "Edad:" ' . $productoEncontrado[11] . '</h5>
              <h5> "Tema:" ' . $productoEncontrado[14] . ' </h5>
          </div>
          <div class="card-footer">
              <h5 class="text-muted"> "Precio:"' . $productoEncontrado[3] . '</h5>
          </div>
      </div>
</div>';
  
        }
    } else {
        echo 'No hay productos disponibles con su criterio de búsqueda';
    }


};

?>
    
    </div>
    </div>

    <!-- Footer  -->
    <footer>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-8">
                        <div class="footer-left">
                            <a href="index.php">
                                <img src="img/logo-2.png" alt="">
                            </a>
                            <p>Nuestra libreria infantil tiene los mejores y más variados títulos del mercado.</p>
                            <ul class="footer-contact">
                                <li>
                                    <i  class="flaticon-location"></i>
                                    Calle 147 #07-70 Bogotá, Colombia
                                </li>
                                <li>
                                    <i class="flaticon-technology"></i>
                                    (+031) 2582030
                                </li>
                                <li>
                                    <i class="flaticon-web"></i>
                                    info@cuentasuenos.com.co

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="single-footer">
                            <h2 class="footer-title">información</h2>
                            <ul class="footer-list">
                                <li><a href="index.php">Cuenta sueños</a></li>
                                <li><a href="#"> Cotiza tus envíos</a></li>

                                <li><a href="#">Términos y Condiciones </a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="single-footer">
                            <h2 class="footer-title"> Mi cuenta</h2>
                            <ul class="footer-list">
                                <li><a href="#  ">Mi cuenta</a></li>
                                <li><a href="#   ">Login</a></li>
                                <li><a href="#   ">Salir de tu cuenta</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="single-footer">
                            <h2 class="footer-title">Nuestra libreria virtual</h2>
                            <ul class="footer-list">
                                <li><a href="#">Pedidos y devoluciones</a></li>
                                <li><a href="#">Busqueda</a></li>



                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-8">
                        <div class="single-footer footer-newsletter">
                            <h2 class="footer-title">Noticias</h2>
                            <p>Recibe todas las novedades, descuentos en títulos, eventos, promociones, fechas importantes, premios y mucho más.</p>



                            <form action="#" method="post">
                                <div class="er">
                                
                                    <input type="text" placeholder="email ">
                                </div>
                                <button class="btn btn-search btn-small" type="submit">SUBSCRIBETE</button>
                               
                            </form>
                            <ul >
                                
                                <a href="#"><img src="img/social.png" alt="" width="150px"></a>

                               
                              
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="footer-bottom-right pull-right">
                            <img src="img/paypal.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer fin -->


    <!-- js interno -->
    <script src="js/javascript.js">
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>






</body>

</html>';

?>