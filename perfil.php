
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
</head>
<body>

    <!-- NAVBAR -->
    <!-- Datos del perfil registrado con boton para activar formulario para modificarlos -->

    <!-- Formulario que estar'a oculto o sin imprimir, y qu tendra boton para guardar -->
    
    <span>
<?php echo "Bienvenid@" . $_SESSION['user']['nombre'] . "  " . $_SESSION['user']['apellido'];  ?>
</span>

<a href="control/registroControl.php?accion=salir">Cerrar Sesion</a>


<div id="modificarAdmin">
<form method="POST" action="control/registroControl.php?accion=modificar">
<input type="hidden" value="<?php echo $_SESSION['user']['idRegistro'];?>" name="idRegistro" id="idRegistro" >
<input type="text" value="<?php echo $_SESSION['user']['nombre'];?>" name="nombre" id="nombre" placeholder="Nombre"/>
<br>
<input type="text"  value="<?php echo $_SESSION['user']['apellido'];?>" name="apellido" id="apellido" placeholder="Apellido"/>
<br>
<input type="text"  value="<?php echo $_SESSION['user']['correo'];?>" name="correo" id="correo" placeholder="Correo"/>
<br>
<input type="password"  value="<?php echo $_SESSION['user']['clave'];?>" name="clave" id="clave" placeholder="Contraseña"/>
<br>
<input type="text"  value="<?php echo $_SESSION['user']['direccion'];?>" name="direccion" id="direccion" placeholder="Direccion"/>
<br>
<input type="text"  value="<?php echo $_SESSION['user']['telefono'];?>" name="telefono" id="telefono" placeholder="Telefono"/>
<br>
<input type="submit" value="modificar"  name="modificar" />
</form>
  </div>  



      <!-- FOOTER -->
</body>
</html>