

    <!-- NAVBAR -->

    <!-- Imagen producto, descripcion, rpecio, etc. y link para ir a comprar -->

    <!-- carrusel con otros productos de la misma categoria -->

    <!-- FOOTER-->


<?php  
$producto = new Producto();
$usuario = $_GET['idRegistro'];

$productos = $producto->mostrarProductos();

    <div id="modificarProducto">
        <form method="POST" action="control/productoControl.php?accion=actualizarProducto">
            <div class="row">
            </div>

            <div class="row my-4 mx-auto">
                <form class="mx-auto">
                    <div class="col-sm-12">
                        <div class="row">
                            <input type="hidden" value="<?php echo $_SESSION['user']['idProducto'];?>" name="idProducto"
                                id="idProducto">


                            <div class="col-sm-12 form-group">
                                <label>Nombre</label>
                                <input type="text" value="<?php echo $_SESSION['user']['nombre'];?>" name="nombre"
                                    id="nombre" placeholder="Nombre" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Autor</label>
                                <input type="text" value="<?php echo $_SESSION['user']['autor'];?>" name="autor"
                                    id="autor" placeholder="Autor" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Precio </label>
                                <input type="text" value="<?php echo $_SESSION['user']['precio'];?>" name="precio"
                                    id="precio" placeholder="Precio" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Descripcion</label>
                                <input type="text" value="<?php echo $_SESSION['user']['descripcion'];?>"
                                    name="descripcion" id="descripcion" placeholder="Descripcion" />
                            </div>
                            <br>
                            <div class="col-sm-12 form-group">
                                <label>Imagen </label>
                                <input type="text" value="<?php echo $_SESSION['user']['imagen'];?>" name="imagen"
                                    id="imagen" placeholder="Imagen" />
                            </div>
                            <br>
                        </div>
                    </div>
            </div>
    </div>
    <input type="submit" value="modificar" name="modificar" />
    </form>
    </form>


?>













