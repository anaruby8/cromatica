<!DOCTYPE html>
<html lang="es">
<head>
    <title>Artistas</title>
        <link rel="stylesheet" href="styles.css">

    <?php require('./Layouts/header.php')?>
    
<!-- header -->   

<!-- cuerpo --> 
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div>
    <div id="contenedor-espacio"></div>

    <div id="contenedor-horizontal">
            <div id="texto-izquierdo">Artistas</div>
    </div>
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->

    <div id="contenedor-gris-small-bordes">
        <div id="textoplano-izquierdo">Te invitamos a descubrir las historias y la inspiración detrás de cada obra maestra, conectando así con la pasión y la visión que impulsa a cada creador.</div>
    </div>
    
    <div id="contenedor-espacio"></div>

    <div class="container-tendencia">
        <div class="art-card-tendencia">
          <img src="1.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
            <p>Elena Vásquez</p>
            <p><strong><em>Armonía Flotante</em></strong></p>
            <p>Óleo sobre lienzo</p>
            <p>100cm x 80cm</p>
            <p><strong>Museo de Vanguardia</strong></p>
          </div>
        </div>
        <!-- Repetir el div de art-card para cada obra de arte -->
        <div class="art-card-tendencia">
          <img src="3.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
          <div class="art-info-tendencia">
              <p>Marco Antonio Solís</p>
              <p><strong><em>Pensamientos Fragmentados</em></strong></p>
              <p>Acrílico sobre madera</p>
              <p>120cm x 90cm</p>
              <p><strong>Museo del Muralismo Mexicano</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="5.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Isabella Rivera</p>
              <p><strong><em>Puerta al Pasado</em></strong></p>
              <p>Técnica mixta en papel</p>
              <p>70cm x 50cm</p>
              <p><strong>Museo de Vanguardia</strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <img src="4.jpg" alt="Artwork" class="art-image-tendencia" onclick="openModal(this);">
            <div class="art-info-tendencia">
              <p>Carlos Jiménez</p>
              <p><strong><em>Contrastes Urbanos</em></strong></p>
              <p>Carboncillo sobre cartulina</p>
              <p>150cm x 100cm</p>
              <p><strong>Museo de Vanguardia</strong></p>
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
