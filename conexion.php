<?php

use function PHPSTORM_META\type;

$conexion=mysqli_connect("localhost","root","Ricardo2597@","tecnocodeproyecto");



if(!$conexion){
 			echo '<script>
	alert("error en la conexión");
	window.history.go(-1);
		</script>';
	exit;

 }
?>
