<?php
if (isset($_POST['enviar'])) {
    if(!empty($_POST['correo'])){
        $correo=$_POST['correo'];
        $asunto="Bienvenido a Cromatica";
        $msg="Nos complace tener te dentro de la comunidad de artistas de cromatica, te estaremos informando acerca de varias exposiciones de arte de tus artistas favoritos";
        $header="FROM: noreply@example.com"."\r\n";
        $header.= "Reply.To; noreply@example.com"."\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail= @mail($correo,$asunto,$msg,$header);
        if ($mail) {
            ?>
            <?php
            include("home.php");
            ?>            
            <dialog id="miDialogo">
            <h2>Correo Enviado</h2>
            <p>Te llegara para confirmar tu suscripcion</p>
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
            include("home.php");
            ?>
            <dialog id="miDialogo">
            <h2>error</h2>
            <p>no se pudo enviar el correo</p>
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
    }
}