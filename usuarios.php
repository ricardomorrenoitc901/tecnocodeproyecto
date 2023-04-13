<?php

class Usuarios{

    private $nombre;
    private $aPaterno;
    private $aMaterno;
    private $correo;
    private $contrasena;
    
    public function inicializarUsuario($nombre,$aPaterno,$aMaterno,$correo,$tamano,$contrasena){
        $this->nombre=$nombre;
        $this->aPaterno=$aPaterno;
        $this->aMaterno=$aMaterno;
        $this->correo=$correo;
        $this->contrasena=$contrasena;
    }  
    public function conectarBD(){
        $con=mysqli_connect ("localhost","root","","recluta")or die("PROBLEMAS CON LA CONEXION DE BD");
            return $con;                      
    }
    public function cerrarBD(){
         mysqli_close($this->conectarBD());
    }
    public function listaUsuario(){ 
        $registros=mysqli_query($this->conectarBD(),"SELECT * from usuarios")or die (mysqli_error($this->conectarBD()));
            echo '<table id="tabla" class="table">';
            echo '<tr class="thead-dark">';
            echo '<th>Id</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellido Paterno</th>';
            echo '<th>Apellido Materno</th>';
            echo '<th>Correo</th>';
            echo '<th>Contraseña</th>';
            echo '</tr>';
            while ($reg=mysqli_fetch_array($registros)){
?>
            <tr>
            <td scope="row"><?php echo $reg['id_usuario'] ?> </td>
            <td><?php echo $reg['nombre'] ?> </td>
            <td><?php echo $reg['aPaterno']?> </td>
            <td><?php echo $reg['aMaterno']?> </td>
            <td><?php echo $reg['correo']?> </td>  
            <td><?php echo $reg['contrasena']?> </td>
        </tr>
            <?php
            }
            echo '</table>';                            
    }
    public function modificarUsuario($id_usuario){
        $this->id_usuario=$id_usuario;
        $registro=mysqli_query($this->conectarBD(),"SELECT * from usuarios where id_usuario='$id_usuario'") or die("Problemas en el select:".mysqli_error($this->conectarBD()));
        if ($reg=mysqli_fetch_array($registro)){
            echo '<form class="formulario" action="actualizarUsuario.php" method="post">
                    
                    <div class="formu">
                    <label for="name">Id:</label>
                    <div class="formu1">
                        <i class="fa fa-list-ol"></i>
                        <input placeholder="Id" type="number" name="id_usuario_nuevo" value="'.$reg[0].'" readonly>
                    </div>
                    <div class="formu">
                    <label for="name">Nombre:</label>
                    <div class="formu1">
                        <i class="fa fa-building-o"></i>
                        <input placeholder="Ingresa tu Nombre nuevo" type="text" name="nombre_nuevo" required value="'.$reg[1].'">
                    </div>
                </div>
                <div class="formu">
                    <label for="ap">Apellido Paterno Nuevo:</label>
                    <div class="formu1">
                        <i class="fa fa-building"></i>
                        <input placeholder="Ingresa tu Apellido Paterno Nuevo" type="text" name="aPaterno_nuevo" required value="'.$reg[2].'">
                    </div>		
                </div>
                <div class="formu">
                    <label for="ap">Apellido Materno Nuevo:</label>
                    <div class="formu1">
                        <i class="fa fa-building-o"></i>
                        <input placeholder="Ingresa el Apellido Materno Nuevo" type="text" name="aMaterno_nuevo" required value="'.$reg[3].'">
                    </div>
                </div>
                <div class="formu">
                    <label for="contr">Correo:</label>
                    <div class="formu1">
                        <i class="fa fa-mobile"></i>
                        <input placeholder="Ingresa tu correo nuevo" type="text" name="correo_nuevo" required value="'.$reg[4].'">
                    </div>
                </div>
                <div class="formu">
                    <label for="contr">Contraseña:</label>
                    <div class="formu1">
                        <i class="fa fa-user fa-2"></i>
                        <input placeholder="Ingresa la contraseña nueva" type="text" name="contrasena_nuevo" required value="'.$reg[5].'">
                    </div>
                </div>
                <div class="formu">
                    <input type="hidden" name="clave_nuevo_usuario" value="'.$id_usuario.'">
                    <button  class="btn btn-dark" id="registrar" type="submit">Modificar</button>
                </div>
                </form>';
        }else{
            echo '<h2>No hay Empresas registrado con esta clave.</h2><br>
            <a href="listaUsuarios.php" class="btn btn-dark" role="button">Volver</a>';
        }
    }
    public function actualizarUsuario($id_usuario_nuevo,$nombre_nuevo,$aPaterno_nuevo,$aMaterno_nuevo,$correo_nuevo,$contrasena_nuevo,$clave_nuevo_usuario){
        $this->id_usuario_nuevo=$id_usuario_nuevo;
        $this->nombre_nuevo=$nombre_nuevo;
        $this->aPaterno_nuevo=$aPaterno_nuevo;
        $this->aMaterno_nuevo=$aMaterno_nuevo;
        $this->correo_nuevo=$correo_nuevo;
        $this->contrasena_nuevo=$contrasena_nuevo;

        $registro=mysqli_query($this->conectarBD(),"update usuarios set id_usuario='$id_usuario_nuevo',nombre='$nombre_nuevo', aPaterno='$aPaterno_nuevo', aMaterno='$aMaterno_nuevo',correo='$correo_nuevo',contrasena='$contrasena_nuevo' where id_usuario='$clave_nuevo_usuario'") or die(mysqli_error($this->conectarBD()));
        echo'<script type="text/javascript">
        alert("El usuario se ha modificado correctamente");
        window.location.href="listaUsuarios.php";
        </script>';
    }
    public function borrarUsuario($id_usuario){
        $registro=mysqli_query($this->conectarBD(),"select id_usuario,nombre,aPaterno,aMaterno,correo,contrasena from usuarios where id_usuario ='$_REQUEST[id_usuario]'") or die(mysqli_error($this->conectarBD()));  
        if ($reg=mysqli_fetch_array($registro)){
            echo "<br><h3>El usuario: </b><br></h3><br>";
            echo "<h3>Nombre:".$reg['nombre']."</h3><br>";
            echo "<h3>Apellido Paterno: ".$reg['aPaterno']."</h3><br>";
            echo "<h3>Apellido Materno:".$reg['aMaterno']."</h3><br>";
            echo "<h3>Correo:".$reg['correo']."</h3><br>";
            echo "<h3>Contraseña:".$reg['contrasena']."</h3><br>";
            $registro=mysqli_query($this->conectarBD(),"delete from usuarios where id_usuario ='$_REQUEST[id_usuario]'") or die(mysqli_error($this->conectarBD()));          
            echo'<script type="text/javascript">
            alert("El usuario ha sido eliminado correctamente");
            window.location.href="listaUsuario.php";
            </script>';        
        }else
            echo'<script type="text/javascript">
            alert("No existe el Usuario con esa clave");
            window.location.href="listaUsuarios.php";
            </script>';  
    }
}

?>