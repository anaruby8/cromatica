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
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Roy_Lichtenstein.jpg/800px-Roy_Lichtenstein.jpg" alt="Leonado Da Vinci" class="profile-pic">
            <div class="profile-info-artista">
              <h1>Roy Fox Lichtenstein </h1>
              <p>Estados Unidos</p>
              
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
            <b><p>Características principales del autor:</p></b>
              <ul>
                <li>Prefería utilizar figuras hechas a mano</li>
                <li>Emplea colores industriales</li>
                <li>Uso de onomatopeyas</li>
                <li>Empleo de técnicas como la serigrafía o el collage</li>
              </ul>
            </div>
          </div>

<!-- Contenedor de biografia -->
          <div class="bio-artista">
            <i><h2>"Una expresión contemporánea e icónica."</h2></i>
            <p>
            Fue un pintor estadounidense de arte pop, artista gráfico y escultor, conocido sobre todo por sus interpretaciones a gran escala del arte del cómic.            </p>
            
          </div>
          <div class="artwork-artista">
            <img src="https://cdijum.mx/wp-content/uploads/2020/09/Beso-Roy-Lichtenstein-720x500.jpg" alt="Artwork by Luc Villard">
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
                <img src="https://lineassobrearte.files.wordpress.com/2014/09/m.jpg" alt="Exposición 1">
            </div>
            <div class="image-container-artista">
                <img src="https://widowcranky.files.wordpress.com/2017/09/img_0664.jpg?w=1024" alt="Exposición 2">
            </div>
            <div class="image-container-artista">
                <img src="https://upload.wikimedia.org/wikipedia/en/4/43/Look_Mickey.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="https://upload.wikimedia.org/wikipedia/en/e/eb/Happy_Tears.jpg" alt="Exposición 3">
            </div>
            <div class="image-container-artista">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/4f/In_the_Car.jpg/300px-In_the_Car.jpg" alt="Exposición 3">
            </div>  
            <!-- Agregar más imágenes según sea necesario -->
        </div>
    </div>

    <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div> 
<!-- cuerpo -->         

<?php require('./Layouts/Footer.php')?>