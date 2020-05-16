<?php
// Activamos en esta pestaña la sesion de nuestro usuario
session_start();
$_SESSION['user'];
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



  <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

  <!--  css  -->

  <!-- Bootstrap core CSS  Camilo-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template Camilo -->
  <link rel="stylesheet" href="css/style.css">
  <!-- ------------fin ---- -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <!-- ------------RIC   inicio ---- -->

  <!-- responsive css -->
  <link rel="stylesheet" href="css/responsive.css">

  <!-- ------------RIC   fin   ---- -->



</head>

<body>

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
                        <form method="POST" action="control/busquedaControl.php?accion=buscarPorLetras" class="title-4">
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
      <h1 class="col-lg-12  my-4">Productos</h1>
    </div>
    <div class="row">
      <div class="list-group col-md-6 col-lg-6">
        <a style="background:#40acd7" href=" #" class="list-group-item" id="registrar-p" onclick="regProducto()">Registrar Productos</a>
      </div>
      <div class="list-group col-lg-6 col-md-6">
        <a href="modificarProducto.php" class="list-group-item" id="modificar-p" onclick="modProducto()">Editar Productos</a>
      </div>

    </div>
    <div class="row my-4 mx-auto" id="productos-registro">
      <form class="mx-auto" method="POST" action="control/productoControl.php?accion=crearProducto">
        <!-- action y method agregado por Maly , junto con value-->
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Titulo</label>
              <input type="text" name="nombreLib" id="nombreLib" placeholder="Ingrese el titulo" class="form-control">
            </div>
            <div class="col-sm-6 form-group">
              <label>Autor</label>
              <input type="text" name="autor" id="autor" placeholder="Ingrese el autor" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Rango de Edad</label>
              <select type="text" name="idCategoriaEdad" id="idCategoriaEdad" class="form-control">
                <option value="1">0 a 2 años</option>
                <option value="2">3 a 6 años</option>
                <option value="3">6 a 8 años</option>
                <option value="4">8 a 12 años</option>
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label>Tema</label>
              <select type="text" name="idCategoriaTema" id="idCategoriaTema" class="form-control">
                <option value='1'> Fantasia</option>
                <option value='2'> Imaginación</option>
                <option value='3'> Pensamiento Lógico</option>
                <option value='4'> Social y valores</option>
                <option value='5'> Naturalista</option>
                <option value='6'> Lenguaje</option>
              </select>

            </div>
          </div>
          <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" id="descripcion" placeholder="Ingrese la descripción del libro" rows="3" class="form-control"></textarea>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Precio</label>
              <input name="precio" id="precio" type="number" placeholder="Ingrese el precio" class="form-control">
            </div>
            <div class="col-sm-6 form-group">
              <label>Imagen</label>
              <input type="file" name="imagen" id="imagen" />
            </div>
          </div>
          <input type="hidden" value="<?php echo $_SESSION['user']['idRegistro']; ?>" name="idRegistro" id="idRegistro">
          <div class="row">
            <div class="col-sm-12 form-group">
              <label>Estado</label>
              <select type="text" name="idEstado" id="idEstado" class="form-control">
                <option value="1"> En existencia</option>
                <option value="2"> Agotado</option>
              </select>
            </div>
            <input name="enter" type="submit" class="btn btn-lg submit" style="background: #40acd7 "> </input>
          </div>
        </div>
      </form>
    </div>

    <div class="row" id="productos-modificar">
      <div class="col-lg-12">

        <div class="row my-4">
          <?php include __DIR__ . "/control/productoControl.php"; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->

  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <div class="row my-4 mx-auto" id="productos-registro">
           <form class="mx-auto" method="POST" action="control/productoControl.php?accion=crearProducto">
        <!-- action y method agregado por Maly , junto con value-->
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Titulo</label>
              <input type="text" name="nombreLib" id="nombreLib" placeholder="Ingrese el titulo" class="form-control">
            </div>
            <div class="col-sm-6 form-group">
              <label>Autor</label>
              <input type="text" name="autor" id="autor" placeholder="Ingrese el autor" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Rango de Edad</label>
              <select type="text" name="idCategoriaEdad" id="idCategoriaEdad" class="form-control">
                <option value="1">0 a 2 años</option>
                <option value="2">3 a 6 años</option>
                <option value="3">6 a 8 años</option>
                <option value="4">8 a 12 años</option>
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label>Tema</label>
              <select type="text" name="idCategoriaTema" id="idCategoriaTema" class="form-control">
                <option value='1'> Fantasia</option>
                <option value='2'> Imaginación</option>
                <option value='3'> Pensamiento Lógico</option>
                <option value='4'> Social y valores</option>
                <option value='5'> Naturalista</option>
                <option value='6'> Lenguaje</option>
              </select>

            </div>
          </div>
          <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" id="descripcion" placeholder="Ingrese la descripción del libro" rows="3" class="form-control"></textarea>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Precio</label>
              <input name="precio" id="precio" type="number" placeholder="Ingrese el precio" class="form-control">
            </div>
            <div class="col-sm-6 form-group">
              <label>Imagen</label>
              <input type="file" name="imagen" id="imagen" />
            </div>
          </div>
          <input type="hidden" value="<?php echo $_SESSION['user']['idRegistro']; ?>" name="idRegistro" id="idRegistro">
          <div class="row">
            <div class="col-sm-12 form-group">
              <label>Estado</label>
              <select type="text" name="idEstado" id="idEstado" class="form-control">
                <option value="1"> En existencia</option>
                <option value="2"> Agotado</option>
              </select>
            </div>
            <input name="enter" type="submit" class="btn btn-lg submit" style="background: #40acd7 "> </input>
          </div>
      </form>
    </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input name="enter" type="submit" class="btn btn-lg submit" style="background: #40acd7 "> </input>
        </div>
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->



  <!-- Modal ELMINAR-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Está seguro que desea eliminar el libro?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <form action="productoControl.php?accion=borrar&idProd=1" type="POST"></form>
          <button type="button" class="btn btn-primary"><input type="submit" value="Aceptar"></button>
        </div>
      </div>
    </div>
  </div>
  <!-- termina formulario de nuevos productos -->

  </div>

  <?php #$product = $_POST['idProd'];
  #  echo $product;
  ?>


  <!-- ----------------Termina Camilo ------------------------- -->

  <!-- Para incluir la lista de productos según la base de datos -->


  <!-- Banner Area inicio -->
  <div class="online-banner-area">
    <div class="container">
      <div class="banner-title text-center">
        <h2>TIENDA DE LIBROS <span>EN LÍNEA </span></h2>
        <p class="flaticon-shop">Comprar libros online al mejor precio 2020 es más fácil que nunca. También te puede interesar ver libros recomendados, las novedades del último mes, de la última semana, los próximos lanzamientos, o nuestra página de eBooks o libros digitales.</p>
        <hr>
      </div>

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
    <script src="js/javascript.js">
    </script>
  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="js/script.js"></script>






</body>

</html>