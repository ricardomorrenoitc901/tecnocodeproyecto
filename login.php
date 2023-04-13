<?php

$connection = mysqli_connect("localhost","root","","recluta");
session_start();
if(!empty($_SESSION['active'])){
    header('location: indexUsuario.php');
}else{
    if(!empty($_POST)){
        if(empty($_POST['correo']) || empty($_POST['contrasena'])){
            echo '<script> alert("Ingrese su correo y contraseña");
            window.history.go(-1);</script>';
        }else{
            
            $correo = $_POST['correo'];
            $contrasena = ($_POST['contrasena']);
    
            $query = mysqli_query($connection, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");
            $result = mysqli_num_rows($query);
    
            if($result > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id_usuario'] = $data['id_usuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['aPaterno'] = $data['aPaterno'];
                $_SESSION['aMaterno'] = $data['aMaterno'];
                $_SESSION['correo'] = $data['correo'];
                $_SESSION['contrasena'] = $data['contrasena'];
                $_SESSION['foto'] = $data['foto'];
    
                if(isset($_SESSION['id_usuario'])){
                    header('location: indexUsuario.php');
                }else{
                    header('location: iniciarS_Usuario.php');
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