<?php

session_start();
$_SESSION['user'];






if ($_SESSION['user']['idTipoAdmin']==1){
    echo '<li><a href="#">PERFIL </a>  <ul class="sub-menu">
    <li><a href="listaAdmins.php">Modificar Adminstradores</a></li>
    <li><a href="listaProductos.php">Mis productos </a></li>
    <li><a href="perfil.php">Mi perfil</a></li>
    </ul>
    </li>
    <li><a href="registroControl.php?accion=salir>CERRAR SESIÓN </a></li>'
}

  ?>


