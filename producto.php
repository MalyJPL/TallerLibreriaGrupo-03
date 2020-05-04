<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>

    <!-- NAVBAR -->

     <!-- Imagen producto, descripcion, rpecio, etc. y link para ir a comprar -->

    <!-- carrusel con otros productos de la misma categoria -->

    <!-- FOOTER-->
    




    <div id="modificarAdmin">
        <form method="POST" action="control/productoControl.php?accion=actualizarProducto">
            <div class="row" >
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
   















</body>
</html>