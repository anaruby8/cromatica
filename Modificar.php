<?php
$nombre=$_POST['nombre'];
$correoAnterior=$_POST['correoAnterior'];
$apellidos=$_POST['apellidos'];
$Nickname=$_POST['nombre-visible'];
$correo=$_POST['correo'];
$contraseña=$_POST['nueva-contrasena'];
session_start();
$_SESSION['nombre']=$nombre;

include('bd.php');

$consulta="SELECT id From usuario where CorreoUsuario='$correoAnterior' ";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if ($filas) {
    $modificar="UPDATE usuario SET NombreUsuario='$nombre', ApellidoUsuario='$apellidos', CorreoUsuario='$correo',Contraseña='$contraseña',Nombre_visible='$Nickname' WHERE CorreoUsuario='$correoAnterior'"; 
    $resultado=mysqli_query($conexion,$modificar);
    ?>
    <?php
    include("editarPerfil.html");
    ?>
    <dialog id="miDialogo">
    <h2>Cambio realizado</h2>
    <p>Los datos se actualizaron correctamente</p>
    </dialog>
    
    <script>
        // Puedes agregar lógica JavaScript para mostrar el diálogo aquí
        document.addEventListener('DOMContentLoaded', function () {
            var miDialogo = document.getElementById('miDialogo');
            miDialogo.showModal();
        });
    </script>
    
    <?php
}else{
    ?>
    <?php
    include("editarPerfil.html");
    ?>
    <dialog id="miDialogo">
    <h2>Error</h2>
    <p>No se encontro los valores</p>
    </dialog>
    
    <script>
        // Puedes agregar lógica JavaScript para mostrar el diálogo aquí
        document.addEventListener('DOMContentLoaded', function () {
            var miDialogo = document.getElementById('miDialogo');
            miDialogo.showModal();
        });
    </script>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>