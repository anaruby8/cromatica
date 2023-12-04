<?php
// Establecer la conexión con la base de datos (reemplaza con tus credenciales)
include('bd.php');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recorrer las fotos
for ($i = 1; $i <= 4; $i++) {
    $nombreCampo = "foto" . $i;

    // Verificar si se cargó una foto
    if (isset($_FILES[$nombreCampo]) && $_FILES[$nombreCampo]['error'] === UPLOAD_ERR_OK) {
        // Mover la foto al directorio deseado (ajusta la ruta según tu configuración)
        $rutaDestino = "Cromatica/uploads/" . $_FILES[$nombreCampo]['name'];
        move_uploaded_file($_FILES[$nombreCampo]['tmp_name'], $rutaDestino);

        // Almacenar información en la base de datos (ajusta la estructura de tu tabla)
        $nombreArchivo = $_FILES[$nombreCampo]['name'];
        $descripcion = "Descripción de la foto " . $i;

        // Insertar datos en la base de datos
        $sql = "INSERT INTO nombre_tabla (nombre_archivo, descripcion) VALUES ('$nombreArchivo', '$descripcion')";
        $resultado = $conexion->query($sql);

        if (!$resultado) {
            echo "Error al almacenar en la base de datos: " . $conexion->error;
        }
    }
}

// Cerrar la conexión
$conexion->close();
?>
