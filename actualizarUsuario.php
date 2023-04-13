<?php

  include "usuarios.php";
  $us1 = new Usuarios();
  $us1->conectarBD();
  $us1-> actualizarUsuario($_REQUEST['id_usuario_nuevo'],$_REQUEST['nombre_nuevo'],$_REQUEST['aPaterno_nuevo'],$_REQUEST['aMaterno_nuevo'],$_REQUEST['correo_nuevo'],$_REQUEST['contrasena_nuevo'],$_REQUEST['clave_nuevo_usuario']);
  $us1->cerrarBD();
  
?>