
    <!-- NAVBAR -->

    <!-- Imagen producto, descripcion, rpecio, etc. y link para ir a comprar -->

    <!-- carrusel con otros productos de la misma categoria -->

    <!-- FOOTER-->

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<script src="js/javascript.js">
    </script>
  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

 <!-- NAVBAR -->
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
<br><br><br><br><br><br><br><br>

</html>


    <?php  


require(__DIR__ . '/modelo/class.Producto.php'); 

$producto = new Producto();


$productosEscogido = $producto->buscarPorId(1);

   echo '<div id="modificarProducto" >
        <form method="POST" action="control/productoControl.php?accion=modificarProducto" >
            <div class="row" >
            </div>

            <div class="row my-4 mx-auto" id="espacioDatos" >
                <form class="mx-auto">
                    <div class="col-sm-12">
                        <div class="row">
                         <br>
                            <div class="col-sm-12 form-group">
                                <label>Nombre</label>
                                <input type="text" value="  ' . $productosEscogido[0][1] . ' " name="nombre"
                                    id="nombre" placeholder="Nombre" />
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Autor</label>
                                <input type="text" value="' . $productosEscogido[0][2] . '" name="autor"
                                    id="autor" placeholder="Autor" />
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Precio </label>
                                <input type="text" value="' . $productosEscogido[0][3] . '" name="precio"
                                    id="precio" placeholder="Precio" />
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Descripcion</label>
                                <input type="text" value="' . $productosEscogido[0][4] . '"
                                    name="descripcion" id="descripcion" placeholder="Descripcion" />
                            </div>
                    
                            <div class="col-sm-12 form-group">
                                <label>Imagen </label>
                                <input type="file" value="' . $productosEscogido[0][5] . ' " name="imagen"
                                    id="imagen" placeholder="Imagen" />
                            </div>
                            
                            <div class="col-sm-12 form-group">
                                <label>categoriaEdad </label>
                                <select type="text" value="' . $productosEscogido[0][6] . ' " name="categoriaEdad"
                                    id="categoriaEdad" >
                                    <option value="1" style="display:hidden">0 a 2 años</option>
                              <option value="2">3 a 6 años</option>
                              <option value="3">6 a 8 años</option>
                              <option value="4">8 a 12 años</option>
                              </select>
                            </div>
                            
                            <div class="col-sm-12 form-group">
                                <label>categoriaTema </label>
                                <select type="text" value="' . $productosEscogido[0][7] . ' " name="categoriaTema"
                                    id="categoriaTema" >
                                    <option value="1"> Fantasia</option>
                                    <option value="2"> Imaginación</option>
                                    <option value="3"> Pensamiento Lógico</option>
                                    <option value="4"> Social y valores</option>
                                    <option value="5"> Naturalista</option>
                                    <option value="6"> Lenguaje</option>
                                  </select>
                                    </div>
                            
                            <div class="col-sm-12 form-group">
                                <label>idRegistro </label>
                                <input type="text" value="' . $productosEscogido[0][8] . ' " name="idRegistro"
                                    id="idRegistro" placeholder="idRegistro" />
                            </div>
                            
                            <div class="col-sm-12 form-group">
                                <label>idEstado </label>
                                <input type="text" value="' . $productosEscogido[0][9] . ' " name="idEstado"
                                    id="idEstado" placeholder="idEstado" />
                            </div>
                        </div>
                    </div>
            </div>
    </div>
    <input type="submit" value="modificar" name="modificar" id="modificar" style="background: #40acd7" class="btn btn-lg submit" />
    </form>
    </form>
    <br>
    <br> ';

   
    

?>


<html>
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
</html>










