<!DOCTYPE html>
<html lang="es">
<head>
    <title>Artistas Biografía</title>

    <?php require('./Layouts/header.php')?>
    
<!-- header -->   

<!-- cuerpo --> 
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div>
    <div id="contenedor-espacio"></div>

    <div class="container-artista">
        <div class="header-artista">
          <div class="profile-artista">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoZREmEuLolcBGvVhU17p5MOS8TypQEUYuXafMzC_rnyg9eb0Etsb2fCX_eVuNboQYpT4&usqp=CAU" alt="Luc Villard" class="profile-pic">
            <div class="profile-info-artista">
              <h1>Luc Villard</h1>
              <p>Francia</p>
              
<!-- Contenedor de datos del artista -->             
            </div>
          </div>
        </div>
        <div class="main-content-artista">
          <div class="sidebar-artista">
            <b><p>LO MÁS DESTACADO DEL ARTISTA</p></b>
            <div class="highlighted">
              <span class="icon-best-seller"></span>
            </div>
            <div class="credentials">
            <b><p>Credenciales:</p></b>
              <ul>
                <li>Distinguido nacionalmente</li>
                <li>Artista experimentado</li>
                <li>Trabajo a comisión</li>
              </ul>
            </div>
          </div>

<!-- Contenedor de biografia -->
          <div class="bio-artista">
            <i><h2>"En la búsqueda del equilibrio"</h2></i>
            <p>Luc Villard es un pintor francés cuyo arte ha aparecido en varias exposiciones individuales y colectivas en Francia. Sus piezas abstractas contienen temas de rostros ocultos y lenguajes inventados...</p>
          </div>
          <div class="artwork-artista">
            <img src="https://historia.nationalgeographic.com.es/medio/2019/05/08/exposicion-en-nueva-york_7dccbda2_1545x2000.jpeg" alt="Artwork by Luc Villard">
          </div>
        </div>
      </div>

<!-- Contenedor de espacio -->
      <div id="contenedor-espacio"></div>

<!-- Contenedor de texto -->    
      <div id="contenedor-horizontal">
            <div id="texto-izquierdo">Obras del Artista</div>
      </div>

<!-- Contenedor de espacio -->
       <div id="contenedor-espacio-small"></div> 

<!-- Contenedor de imagenes -->
    <div class="gallery-container">
        <div class="gallery">
            <div class="image-container-artista">
                <img src="1.jpg" alt="Exposición 1">
            </div>
            <div class="image-container-artista">
                <img src="3.jpg" alt="Exposición 2">
            </div>
            <div class="image-container-artista">
                <img src="5.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="4.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="4.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="4.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="4.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="4.jpg" alt="Exposición 3">
            </div>     
            <!-- Agregar más imágenes según sea necesario -->
        </div>
    </div>

    <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div> 
<!-- cuerpo -->         

<?php require('./Layouts/Footer.php')?>