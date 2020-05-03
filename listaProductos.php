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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template Camilo -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- ------------fin ---- -->

    <!-- ------------RIC   inicio ---- -->



    <!-- style css -->
    <link rel="stylesheet" href="style.css">
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
                <a style="background:#40acd7" href=" #" class="list-group-item" id="registrar-p"
                    onclick="regProducto()">Registrar Productos</a>
            </div>
            <div class="list-group col-lg-6 col-md-6">
                <a href="#" class="list-group-item" id="modificar-p" onclick="modProducto()">Editar Productos</a>
            </div>

        </div>
        <div class="row my-4 mx-auto" id="productos-registro">
            <form class="mx-auto">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Titulo</label>
                            <input type="text" placeholder="Ingrese el titulo" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Autor</label>
                            <input type="text" placeholder="Ingrese el autor" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Rango de Edad</label>
                            <select type="text" placeholder="Ingrese el titulo" class="form-control">
                                <option>0 a 2 años</option>
                                <option>3 a 6 años</option>
                                <option>6 a 8 años</option>
                                <option>8 a 12 años</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Tema</label>
                            <select type="text" placeholder="Ingrese el autor" class="form-control">
                                <option>Social y valores</option>
                                <option>Fantasia</option>
                                <option>Imaginación</option>
                                <option>Pensamiento Lógico</option>
                                <option>Naturalista</option>
                                <option>Lenguaje</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea placeholder="Ingrese la descripción del libro" rows="3"
                            class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Precio</label>
                            <input type="number" placeholder="Ingrese el precio" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Imagen</label>
                            <input type="file" placeholder="Ingrese el autor" class="form-control-file"
                                accept="image/*">
                        </div>
                    </div>

                    <button type="button" class="btn btn-lg submit" style="background: #40acd7 ">Submit</button>
                </div>
            </form>
        </div>

        <div class="row" id="productos-modificar">
            <div class="col-lg-12">



                <div class="row my-4">

                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="row">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="files/inventoras.jpg"
                                        alt="Recomendado 1"></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Inventoras y sus inventos</a>
                                    </h4>
                                    <h5>Autor: Aitziber Lopez</h5>
                                    <h5>Edad: 8 a 12 años</h5>
                                    <h5>Tema: imaginacion</h5>

                                </div>
                                <div class="card-footer">
                                    <h5 class="text-muted">Precio $102.248</h5>
                                </div>
                                <div class="row mx-0">
                                    <div class="list-group col-lg-6 mx-0 p-0">
                                        <a href=" #" class="list-group-item active">Eliminar</a>
                                    </div>
                                    <div class="list-group col-lg-6 mx-0 p-0">
                                        <a href=" #" class="list-group-item">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="files/conejo.jpg" alt="Recomendado 2"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Conejo el mentiroso</a>
                                </h4>
                                <h5>Autor: afdasd</h5>
                                <h5>Edad: 6 a 8 años</h5>
                                <h5>Tema: Imaginación</h5>

                            </div>
                            <div class="card-footer">
                                <h5 class="text-muted">Precio $37.500</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="files/ConmisPalabras.jpg"
                                    alt="Recomendado 3"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Con mis palabras</a>
                                </h4>
                                <h5>Autor: Cristina Tébar Montes</h5>
                                <h5>Edad: 6 a 8 años</h5>
                                <h5>Tema: Imaginación</h5>

                            </div>
                            <div class="card-footer">
                                <h5 class="text-muted">Precio $ 110.952</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top"
                                    src="files/descubro-los-arboles-y-aprendo-a-reconocerlos.jpg"
                                    alt="Recomendado 4"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Descubro los Arboles</a>
                                </h4>
                                <h5>Autor: Claire Lecoeuvre </h5>
                                <h5>Edad: 3 a 6 años</h5>
                                <h5>Tema: Naturalista</h5>

                            </div>
                            <div class="card-footer">
                                <h5 class="text-muted">Precio $62.000</h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="files/el_principito.png" alt="Recomendado 5"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">EL PRINCIPITO</a>
                                </h4>
                                <h5>Autor: Antoine de Saint-Exupéry </h5>
                                <h5>Edad: 8 a 12 años</h5>
                                <h5>Tema: Imaginación</h5>

                            </div>
                            <div class="card-footer">
                                <h5 class="text-muted">Precio $ 53.095</h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="files/EldragoncolorFrambuesa.jpg"
                                    alt="Recomendado 6"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">El Dragón Color Frambuesa</a>
                                </h4>
                                <h5>Autor: Georg Bydlinski </h5>
                                <h5>Edad: 3 a 6 años</h5>
                                <h5>Tema: Imaginación</h5>

                            </div>
                            <div class="card-footer">
                                <h5 class="text-muted">Precio $ 73.095</h5>

                            </div>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </div>

    </div>



    <!-- ----------------Termina Camilo ------------------------- -->

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
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-8">
                        <div class="footer-left">
                            <a href="index.html">
                                <img src="img/logo-2.png" alt="">
                            </a>
                            <p>Nuestra libreria infantil tiene los mejores y más variados títulos del mercado.</p>
                            <ul class="footer-contact">
                                <li>
                                    <i class="flaticon-location"></i>
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
                                <li><a href="about.html">Cuenta sueños</a></li>
                                <li><a href="#"> Cotiza tus envíos</a></li>

                                <li><a href="#">Términos y Condiciones </a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="single-footer">
                            <h2 class="footer-title"> Mi cuenta</h2>
                            <ul class="footer-list">
                                <li><a href="my-account.html">Mi cuenta</a></li>
                                <li><a href="account.html">Login</a></li>
                                <li><a href="cart.html">Mi carrito de compras</a></li>
                                <li><a href="checkout.html">Salir de tu cuenta</a></li>
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
                            <p>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas
                                aliqua.</p>



                            <form action="#" method="post">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>







</body>

</html>