<?php

use function PHPSTORM_META\type;

$conexion=mysqli_connect("192.9.155.8","Ricardo2597@","Ricardo2597@","tecnocodeproyecto");



if(!$conexion){
 			echo '<script>
	alert("error en la conexión");
	window.history.go(-1);
		</script>';
	exit;

 }
?>
