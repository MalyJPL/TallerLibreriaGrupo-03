<?php

$usuarioActivo = false;
if(isset($_SESSION['loggedin'])){
$usuarioActivo = $_SESSION['loggedin']; 
}

if ($usuarioActivo== false){
    echo '
    <!------------------------------- Ingresar ---------------------------->
    <li><a class="registro" href="#">INGRESAR</a>
    <ul class="sub-menu">
        <div class="registroAdmin">
            <form method="POST" action="control/registroControl.php?accion=ingresar ">
                <input type="text" name="correo" id="correo" placeholder="Email" />
                <br>
                <input type="password" name="clave" id="clave"
                    placeholder="Contraseña" />
                <br>
                <input type="submit" value="Iniciar Sesion"  class="registrarbtn" name="enter" />
            </form>
        </div>
        </ul>
    </li>
<!------------------------------- Ingresar  FIN---------------------------->
    <li><a class="registro" href="#">REGISTRAR</a>
    <ul class="sub-menu">
    <div class="registroAdmin">
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
        <input type="submit" value="Registrar" class="registrarbtn"  name="registrar" />
        </form>
        </div>  
        </ul>
    </li>';
  }
    else if($usuarioActivo== true & $_SESSION['user']['idTipoAdmin']==1){
    echo '<li><a href="#">PERFIL </a>
        <ul class="sub-menu">
            <li><a href="listaAdmins.php">Modificar usuarios</a></li>
            <li><a href="listaProductos.php">Mis productos </a></li>
            <li><a href="perfil.php">Mi perfil</a></li>
        </ul>
    </li>
    <li><a href="control/registroControl.php?accion=salir">CERRAR SESION </a>
    </li>';
}
else if($usuarioActivo== true & $_SESSION['user']['idTipoAdmin']==2){
  echo '<li><a href="#">PERFIL </a>
      <ul class="sub-menu">
          <li><a href="listaProductos.php">Mis productos </a></li>
          <li><a href="perfil.php">Mi perfil</a></li>
      </ul>
  </li>
  <li><a href="control/registroControl.php?accion=salir">CERRAR SESION </a>
  </li>';
}


  ?>


