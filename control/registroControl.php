<?php

require(__DIR__ . '/../modelo/class.Contacto.php'); 


//listar todos los usuarios

/* obtener accion de registro usuario */

/* poner funciones con swithc segun accion */

//crear usuario
// modificar usuario

$accion = $_GET['accion'];

switch($accion){
    case 'registrar':
    registrar();
    break;
case 'ingresar':
    ingresar();
    break;
case 'salir':
    salir();
break;
}

function registrar(){
   $admin = new Administrador();  

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $correo = $_POST['correo'];
   $clave = $_POST['clave'];
   $direccion = $_POST['direccion'];
   $telefono = $_POST['telefono'];

   $admin->agregarUsuario($nombre, $apellido, $correo, $clave, $direccion, $telefono);

}

function ingresar(){
    $admin = new Administrador();
    
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    
    $result = $admin->iniciarSesion($correo, $clave);
    
    if($result != 'error'){
    session_start(); 
    $_SESSION['loggedin'] = true; 
    $_SESSION['user'] = $result; 
    
    header('Location: ../perfil.php');
    } else {
        echo 'Tus datos no son validos';
    }
    }
    
    function salir(){
        session_destroy(); 
        header('Location: ../index.php');
    }
    
    


?>