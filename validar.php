<?php
$usuario=$_POST['Correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('bd.php');

$consulta="SELECT * From usuario where CorreoUsuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    
    header("location:Home.php");
    
}else{

    ?>
    <?php
    include("Login.html");
    ?>
    <dialog id="miDialogo">
    <h2>Error</h2>
    <p>Verifica tus datos. Presiona esc para cerra la ventana</p>
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