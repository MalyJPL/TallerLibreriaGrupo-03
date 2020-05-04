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

  <!-- ------------RIC   inicio ---- -->

  <!-- responsive css -->
  <link rel="stylesheet" href="css/responsive.css">

  <!-- ------------RIC   fin   ---- -->



</head>

<body>

  <!--Header inicio-->
  <div class="header-area">
    <div class="container">
      <div class="row">
        <div class="search">
          <div class="header-logo">
            <a href="index.html">
              <img src="img/logo.png" alt="" width="400px">
            </a>
          </div>
          <div class="layer-4">
            <form action="#" class="title-4">
              <input type="text" placeholder="¿Que libro esta buscando?">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>

        <div class="col-md-19 col-sm-32 hidden-xs">
          <div class="mainmenu">
            <nav>
              <ul id="nav">
                <li><a href="index.html">INICIO</a></li>

                <!-- get -->

                <li><a href="#">Por tema</a>
                  <ul class="sub-menu">
                    <li><a href="sociales.html">Social y valores </a></li>
                    <li><a href="fantasia.html">Fantasía </a></li>
                    <li><a href="imaginacion.html">Imaginación </a></li>
                    <li><a href="pensamiento.html">Pensamiento lógico </a></li>
                    <li><a href="naturalista.html">Naturalista </a></li>
                    <li><a href="lenguaje.html">lenguaje </a></li>
                  </ul>
                </li>
                <li><a href="#">Por edad</a>
                  <ul class="sub-menu">
                    <li><a href="2.html">0 a 2 años </a></li>
                    <li><a href="6.html">3 a 6 años </a></li>
                    <li><a href="8.html">6 a 8 años </a></li>
                    <li><a href="12.html">8 a 12 años </a></li>


                  </ul>
                </li>
                <li><a href="contact.html">CONTÁCTENOS</a></li>

                <li><a href="ingresar.html">INGRESAR</a></li>

                <li><a href="registrar.html">REGISTRAR</a></li>

                <li><a href="#">PERFIL </a>
                  <ul class="sub-menu">
                    <li><a href="sociales.html">Modificar usuarios</a></li>
                    <li><a href="fantasia.html">Mis productos </a></li>
                    <li><a href="imaginacion.html">Mi perfil</a></li>
                  </ul>
                </li>

                <li><a href="ingresar.html">CERRAR SESIÓN </a></li>
              </ul>
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
        <a href="#" class="list-group-item" id="modificar-p" onclick="modProducto()">Editar Productos</a>
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
                </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Elminar Libro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Está seguro que desea eliminar el libro?

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" action="controlProducto.php?accion=borrar&idProd=<?php $product = $_POST['idProd'];
                                                                                                          echo $product;
                                                                                                          ?>">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- termina formulario de nuevos productos -->

  </div>




  <!-- ----------------Termina Camilo ------------------------- -->

  <!-- Para incluir la lista de productos según la base de datos -->


  <!-- Banner Area inicio -->
  <div class="online-banner-area">
    <div class="container">
      <div class="banner-title text-center">
        <h2>TIENDA DE LIBROS <span>EN LÍNEA </span></h2>
        <p class="flaticon-shop"> Nuestra tienda tiene los más populares libros
          xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx </p>
        <hr>
      </div>

    </div>
  </div>


  <!-- Footer  -->
  <footer>
    <div class="foo* action=" #" method="post">
      <div>
        <input type="text" placeholder="email ">
      </div>
      <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
      <i class="flaticon-networking"></i>
      </form>
      <ul class="social-icon">
        <li>
          <a href="#">
            <i class="flaticon-social"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="flaticon-social-1"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="flaticon-social-2"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="flaticon-video"></i>
          </a>
        </li>
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