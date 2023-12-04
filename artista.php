<!DOCTYPE html>
<html lang="es">
<head>
    <title>Artistas</title>
    
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
          <a href="artista_bio.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoZREmEuLolcBGvVhU17p5MOS8TypQEUYuXafMzC_rnyg9eb0Etsb2fCX_eVuNboQYpT4&usqp=CAU" alt="Artwork" class="art-image-tendencia"></a>
          <div class="art-info-tendencia">
            <p>Luc Villard</p>
            <p><strong><em>(1955-Actualidad)</em></strong></p>
            <p></p>
            <p><strong></strong></p>
          </div>
        </div>
        <!-- Repetir el div de art-card para cada obra de arte -->
        <div class="art-card-tendencia">
          <a href="artista_bio.html"><img src="https://konfio-blog.s3.us-west-2.amazonaws.com/wp-content/uploads/2019/05/02113926/la-vida-de-leonardo-da-vinci-y-su-lado-emprendedor.jpg" alt="Artwork" class="art-image-tendencia"></a>
            <div class="art-info-tendencia">
              <p>Leonardo Da Vinci</p>
              <p><strong><em>(1452-1519)</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <a href="artista_bio.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Roy_Lichtenstein.jpg/800px-Roy_Lichtenstein.jpg" alt="Artwork" class="art-image-tendencia"></a>
            <div class="art-info-tendencia">
              <p>Roy Fox Lichtenstein</p>
              <p><strong><em>(1923-1997)</em></strong></p>
            </div>
          </div>
          <!-- Repetir el div de art-card para cada obra de arte -->
          <div class="art-card-tendencia">
            <a href="artista_bio.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Andy_Warhol_at_the_Jewish_Museum_%28by_Bernard_Gotfryd%29_–_LOC.jpg/640px-Andy_Warhol_at_the_Jewish_Museum_%28by_Bernard_Gotfryd%29_–_LOC.jpg" alt="Artwork" class="art-image-tendencia"></a>
            <div class="art-info-tendencia">
              <p>Andy Warhol</p>
              <p><strong><em>(1928-1987)</em></strong></p>
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
