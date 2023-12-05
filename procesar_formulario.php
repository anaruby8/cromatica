<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado un archivo
    if (isset($_FILES["file"])) {
        $targetDirectory = "C:\Nueva carpeta\htdocs\Cromatica\uploads";
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verificar si es una imagen real
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check === false) {
            echo "El archivo no es una imagen válido.";
            $uploadOk = false;
        }

        // Verificar si el archivo ya existe
        if (file_exists($targetFile)) {
            echo "Lo siento, el archivo ya existe.";
            $uploadOk = false;
        }

        // Verificar el tamaño máximo de archivo (opcional)
        $maxFileSize = 5 * 1024 * 1024; // 5 MB
        if ($_FILES["file"]["size"] > $maxFileSize) {
            echo "Lo siento, el archivo es demasiado grande.";
            $uploadOk = false;
        }

        // Permitir solo ciertos formatos de archivo (opcional)
        $allowedFormats = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
            $uploadOk = false;
        }

        // Si todas las verificaciones son exitosas, intentar subir el archivo
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                echo "La imagen " . htmlspecialchars(basename($_FILES["file"]["name"])) . " ha sido subida.";
            } else {
                echo "Lo siento, ha ocurrido un error al subir la imagen.";
            }
        }
    }
}

?>
    <?php
    include("contactanos.php");
    ?>
    <dialog id="miDialogo">
    <h2>Error</h2>
    <p>final del php</p>
    </dialog>

    <script>
        // Puedes agregar lógica JavaScript para mostrar el diálogo aquí
        document.addEventListener('DOMContentLoaded', function () {
            var miDialogo = document.getElementById('miDialogo');
            miDialogo.showModal();
        });
    </script>
    
    <?php
?>
