<?php
$usuario=$_POST['Usuario'];
$Apellidos=$_POST['Apellidos'];
$Correo=$_POST['Correo'];
$contraseña=$_POST['Contraseña'];
$Nickname=$_POST['Nickname'];

include('bd.php');

$Insercion="INSERT INTO usuario (NombreUsuario,ApellidoUsuario,CorreoUsuario,Contraseña,Nombre_Visible) values ('$usuario','$Apellidos','$Correo','$contraseña','$Nickname')";

$consulta="SELECT * From usuario where CorreoUsuario='$Correo'";
$resultado=mysqli_query($conexion,$consulta);
$Existe=mysqli_num_rows($resultado);

if ($Existe) {
    ?>
    <?php
    include("Registro.html");
    ?>
    <dialog id="miDialogo">
    <h2>Error</h2>
    <p>Ya existe una cuenta con el correo ingresado.</p>
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
    $resultado=mysqli_query($conexion,$Insercion);
    ?>
    <?php
    include("Login.html");
    ?>
    <dialog id="miDialogo">
    <h2>Usuario registrado</h2>
    <p>Usuario registrado exitosamente.</p>
    </dialog>

    <script>
        // Puedes agregar lógica JavaScript para mostrar el diálogo aquí
        document.addEventListener('DOMContentLoaded', function () {
            var miDialogo = document.getElementById('miDialogo');
            miDialogo.showModal();
        });
    </script>
    
    <?php
    header("location:Login.html");
   
}


?>