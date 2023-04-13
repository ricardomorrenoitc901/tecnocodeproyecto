<?php
require 'conexion.php';
$nombre = $_POST['nombre'];
$aPaterno = $_POST['aPaterno'];
$aMaterno = $_POST['aMaterno'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$insertar = "INSERT INTO usuarios (nombre,aPaterno,aMaterno,correo,contrasena) 
        VALUES ('$nombre','$aPaterno','$aMaterno','$correo','$contrasena') ";

$query = mysqli_query($conexion, $insertar);

if($query){
    echo "<script> alert('Has sido registrado');
          location.href = 'iniciarS_Usuario.php';
          </script>";
}else{
    echo "<script> alert('Registro fallido');
    location.href = 'formUsuarios.html';
    </script>";
}