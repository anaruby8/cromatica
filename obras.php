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
          <img src="https://image.lexica.art/full_webp/20b18d8b-9ed4-4a03-9941-bc1f81cd2cb2" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
            <p>Nombre Autor</p>
            <p><strong><em>Nombre de la Obra</em></strong></p>
            <p>Material - Medidas</p>
            <p><strong>Exhibición</strong></p>
          </div>
        </div>
        <!-- Repetir el div de art-card para cada obra de arte -->
        <div class="art-card-tendencia">
          <img src="https://image.lexica.art/full_webp/9b848ec1-dd5b-44fd-8141-33e34f4eccb0" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
              <p>Nombre Autor</p>
              <p><strong><em>Nombre de la Obra</em></strong></p>
              <p>Material - Medidas</p>
              <p><strong>Exhibición</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="quien3.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Nombre Autor</p>
              <p><strong><em>Nombre de la Obra</em></strong></p>
              <p>Material - Medidas</p>
              <p><strong>Exhibición</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="https://image.lexica.art/full_webp/2fae10cf-0148-4aa5-844d-815fce2f8d7f" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Nombre Autor</p>
              <p><strong><em>Nombre de la Obra</em></strong></p>
              <p>Material - Medidas</p>
              <p><strong>Exhibición</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
    </div>
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->

    <div class="container-tendencia">
        <div class="art-card-tendencia">
          <img src="https://image.lexica.art/full_webp/8047bbd9-a18e-4bde-9abc-15b89dc54fdc" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
            <p>Nombre Autor</p>
            <p><strong><em>Nombre de la Obra</em></strong></p>
            <p>Material - Medidas</p>
            <p><strong>Exhibición</strong></p>
          </div>
        </div>
        <!-- Repetir el div de art-card para cada obra de arte -->
        <div class="art-card-tendencia">
            <img src="https://image.lexica.art/full_webp/c50811e7-5579-442d-98ae-c38967391e65" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Nombre Autor</p>
              <p><strong><em>Nombre de la Obra</em></strong></p>
              <p>Material - Medidas</p>
              <p><strong>Exhibición</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="https://image.lexica.art/full_webp/94f73928-90a7-485f-9bd7-ebe3a9b17fe0" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Nombre Autor</p>
              <p><strong><em>Nombre de la Obra</em></strong></p>
              <p>Material - Medidas</p>
              <p><strong>Exhibición</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="https://image.lexica.art/full_webp/2fae10cf-0148-4aa5-844d-815fce2f8d7f" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Nombre Autor</p>
              <p><strong><em>Nombre de la Obra</em></strong></p>
              <p>Material - Medidas</p>
              <p><strong>Exhibición</strong></p>
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
