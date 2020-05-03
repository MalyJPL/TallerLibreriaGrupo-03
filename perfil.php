<?php
// Activamos en esta pestaña la sesion de nuestro usuario
session_start();
$_SESSION['user'];
?>

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

<body>

    <!-- NAVBAR -->
    <!-- Datos del perfil registrado con boton para activar formulario para modificarlos -->

    <!-- Formulario que estar'a oculto o sin imprimir, y qu tendra boton para guardar -->

    <div id="contenedorPerfil">
    <span id="bienvenido">
        <?php echo "Bienvenid@" . $_SESSION['user']['nombre'] . "  " . $_SESSION['user']['apellido'];  ?>
    </span>


    <div id="modificarAdmin">
        <form method="POST" action="control/registroControl.php?accion=modificar">
            <div class="row" >
                <h1 class="col-lg-5  my-4" style="background:#40acd7" id="perfilTitulo" id="registrar-p" >PERFIL</h1>
            </div>

            <div class="row my-4 mx-auto" id="espacioDatos">
                <form class="mx-auto">
                    <div class="col-sm-12">
                        <div class="row">
                            <input type="hidden" value="<?php echo $_SESSION['user']['idRegistro'];?>" name="idRegistro"
                                id="idRegistro">


                            <div class="col-sm-12 form-group">
                                <label>Nombre</label>
                                <input type="text" value="<?php echo $_SESSION['user']['nombre'];?>" name="nombre"
                                    id="nombre" placeholder="Nombre" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Apellido</label>
                                <input type="text" value="<?php echo $_SESSION['user']['apellido'];?>" name="apellido"
                                    id="apellido" placeholder="Apellido" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Correo </label>
                                <input type="text" value="<?php echo $_SESSION['user']['correo'];?>" name="correo"
                                    id="correo" placeholder="Correo" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Contraseña</label>
                                <input type="password" value="<?php echo $_SESSION['user']['clave'];?>" name="clave"
                                    id="clave" placeholder="Contraseña" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Direccion </label>
                                <input type="text" value="<?php echo $_SESSION['user']['direccion'];?>" name="direccion"
                                    id="direccion" placeholder="Direccion" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Telefono</label>
                                <input type="text" value="<?php echo $_SESSION['user']['telefono'];?>" name="telefono"
                                    id="telefono" placeholder="Telefono" />
                            </div>
                            <br>
                        </div>
                    </div>
            </div>
    </div>
    <input type="submit" value="modificar" name="modificar"  style="background: #40acd7" class="btn btn-lg submit" id="modificarBoton"/>
    </form>
    </form>
    </div>
    </div>
    <br>
    <a href="control/registroControl.php?accion=salir" style="background: #40acd7" class="btn btn-lg submit" id="cerrarSesion">Cerrar Sesion</a>

    <!-- FOOTER -->
</body>

</html>