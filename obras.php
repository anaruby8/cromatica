<!DOCTYPE html>
<html lang="es">
<head>
    <title>Obras</title>
    <?php require('./Layouts/header.php')?>
<!-- header -->   

<!-- cuerpo --> 
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div>
    <div id="contenedor-espacio"></div>

    <div id="contenedor-horizontal">
            <div id="texto-izquierdo">Obras de la Galeria</div>
    </div>
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->

    <div id="contenedor-gris-small-bordes">
        <div id="textoplano-izquierdo">Cada obra es más que un simple objeto; es un testimonio del ingenio y la pasión que define a nuestros artistas. Sumérgete en este espacio digital donde las imágenes trascienden las palabras, y cada obra es una invitación a la contemplación y la conexión emocional</div>
    </div>
    <div id="contenedor-espacio"></div>

    <div class="container-tendencia">
        <div class="art-card-tendencia">
          <img src="1.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
            <p>Axl</p>
            <p><strong><em>"Sin nombre"</em></strong></p>
            <p></p>
            <p><strong>Exhibición</strong></p>
          </div>
        </div>
        <!-- Repetir el div de art-card para cada obra de arte -->
        <div class="art-card-tendencia">
            <img src="3.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Neraldos Jonia</p>
              <p><strong><em>"Vacio"</em></strong></p>
              <p></p>
              <p><strong></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="5.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Jimena JS</p>
              <p><strong><em>"BUENOS dias"</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="4.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>RBD</p>
              <p><strong><em>"Construyendo"</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
    </div>
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->
    <div class="container-tendencia">
        <div class="art-card-tendencia">
          <img src="RSC/A cute white with brown spots cat eating ramen (1).jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
            <p>AxL</p>
            <p><strong><em>"Ramensito"</em></strong></p>
          </div>
        </div>
        <!-- Repetir el div de art-card para cada obra de arte -->
        <div class="art-card-tendencia">
            <img src="RSC/A tan skin mayan queen all blue and gold elaborate (1).jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Reyna Maya</p>
              <p><strong><em>Jimena JS</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="RSC/blog profile image (3).jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Perfil</p>
              <p><strong><em>AxL</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="RSC/stunning still-life photo render of a Mexican Skul (1).jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Calavera mexicana</p>
              <p><strong><em>RBD</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
    </div>
    <div id="contenedor-espacio"></div> <!-- Contenedor de espacio -->

    <!-- Ventana emergente para la imagen en grande -->
    <div id="popup" class="popup-tendencia">
        <span class="close-tendencia" onclick="closeModal()">&times;</span>
        <img class="popup-content-tendencia" id="expandedImg">
    </div>
<!-- cuerpo -->         

<!-- PIE DE PAGINA -->   
    <div id="contenedor-imagen-fondo">
        <div id="contenedor-suscripcion">
            <div id="imagen-contenedor">
                <!-- Imagen de fondo -->
            </div>
            <div id="contenido-suscripcion">
                <p>Suscríbete al boletín semanal</p>
                <input type="text" id="caja-texto" placeholder=" email">
                <button id="boton-ok">OK</button>
                
            </div>
        </div>
    </div>
    <div id="contenedor-gris">
        <div class="redes-sociales">
            <div class="columna-redes">
                <a href="#"><img src="https://assets.stickpng.com/images/60fea6773d624000048712b5.png" alt="Facebook">  /Facebook</a>
                <a href="#"><img src="https://static.vecteezy.com/system/resources/previews/016/716/486/original/twitter-icon-free-png.png" alt="Twitter">  /Twitter</a>
            </div>
            <div class="columna-redes">
                <a href="#"><img src="https://i.pinimg.com/originals/3b/21/c7/3b21c7efd2ba9c119fb8d361acacc31d.png" alt="Instagram">   /Intagram</a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn"> /LinkedIn</a>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="contenido-footer">
            <p>© 2023 Cromatica. Todos los derechos reservados.</p>
            <p>123 Calle Principal, Ciudad, País</p>
            <p>Teléfono: (123) 456-7890 | Correo electrónico: info@cromatica.com</p>
        </div>
    </div>
<!-- PIE DE PAGINA -->       
    
<script src="script.js"></script>
</body>
</html>
