<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO ADMINISTRADORES</title>
</head>
<body>
  <div id="registroAdmin">
<form method="POST" action="control/registroControl.php?accion=registrar">
<input type="text" name="nombre" id="nombre" placeholder="Nombre"/>
<br>
<input type="text" name="apellido" id="apellido" placeholder="Apellido"/>
<br>
<input type="text" name="correo" id="correo" placeholder="Correo"/>
<br>
<input type="password" name="clave" id="clave" placeholder="Contraseña"/>
<br>
<input type="text" name="direccion" id="direccion" placeholder="Direccion"/>
<br>
<input type="text" name="telefono" id="telefono" placeholder="Telefono"/>
<br>
<input type="submit" value="Registrar"  name="registrar" />
</form>
  </div>  

<div id="nombreUsuario">

</div>




</body>
</html>