<!--
?php
require_once "conexion.php";


$correo=$_POST["correo"];
$contrasena=$_POST["contrasena"];


$query=mysqli_query($conexion,"SELECT * from administrador where correo='$correo' and contrasena='$contrasena'");
$resultado=mysqli_num_rows($query);

if($resultado>0){
	header('location: indexAdmin.html');


}else{
		echo '<script>
	alert("Correo o Contraseña incorrecta");
	window.history.go(-1);
		</script>';
	exit;

	}

mysqli_close($conexion);
?> 
-->

<?php

$connection = mysqli_connect("localhost","root","Ricardo2597@","tecnocodeproyecto");
session_start();
if(!empty($_SESSION['active'])){
    header('location: indexAdmin.php');
}else{
    if(!empty($_POST)){
        if(empty($_POST['correo']) || empty($_POST['contrasena'])){
            echo '<script> alert("Ingrese su correo y contraseña");
            window.history.go(-1);</script>';
        }else{
            
            $correo = $_POST['correo'];
            $contrasena = ($_POST['contrasena']);
    
            $query = mysqli_query($connection, "SELECT * FROM administrador WHERE correo = '$correo' AND contrasena = '$contrasena'");
            $result = mysqli_num_rows($query);
    
            if($result > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id_admin'] = $data['id_admin'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['correo'] = $data['correo'];
                $_SESSION['contrasena'] = $data['contrasena'];
    
                if(isset($_SESSION['id_admin'])){
                    header('location: indexAdmin.php');
                }else{
                    header('location: iniciarS_Admin.php');
                }

            }else{
                echo '<script> alert("El usuario y contraseña son incorrectos");
            window.history.go(-1);</script>';
                session_destroy();
            }
        }
    }
}


?>
