<?php
require 'conexion.php';
$habilidad = $_POST['habilidad'];
$conocimiento = $_POST['conocimiento'];
$grado = $_POST['grado'];
$puesto = $_POST['puesto'];
$horario = $_POST['horario'];
$descripcion = $_POST['descripcion'];
$requisitos = $_POST['requisitos'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_termino = $_POST['fecha_termino'];
$estatus = $_POST['estatus'];
$fecha_hora = $_POST['fecha_hora'];


$insertar = "INSERT INTO ofertas (habilidad,conocimiento,grado,puesto,horario,descripcion,requisitos,fecha_inicio,fecha_termino,estatus,fecha_hora) 
        VALUES ('$habilidad','$conocimiento','$grado','$puesto','$horario','$descripcion','$requisitos','$fecha_inicio','$fecha_termino','$estatus','$fecha_hora') ";

$query = mysqli_query($conexion, $insertar);

if($query){
    echo "<script> alert('El talento humano ha sido registrada correcto');
          location.href = 'ofertaRegistrada.php';
          </script>";
}else{
    echo "<script> alert('Registro fallido');
    location.href = 'formOfertas.php';
    </script>";
}