<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cromática Home</title>

    <link rel="icon" type="image/png" href="logopng.png"> <!-- Reemplaza 'ruta/imagen.png' con la ruta a tu ícono -->
    <!-- Resto de las etiquetas meta y estilo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <style>   
    </style>

</head>
<body>

    <header style="position: fixed; top: 0; left: 0; right: 0; z-index: 100;">
        <div id="logo">
            <a id="enlace-derecho" href="home.html"><img src="logo.jpeg" alt="Logo"></a>
            <span id="cromatica" href="home.html">Cromática</span>
        </div>
        <div id="menu">
            <a href="agenda.php">Agenda</a>
            <a href="obras.php">Obras</a>
            <a href="artista.php">Artistas</a>
        </div>
        <div id="search-container">
            <div id="search-box">
                <input type="text" id="search-input" placeholder="Buscar artista/obra...">
            </div>
            <div id="login-container">
                <a href="Login.html"><button id="login-button">Iniciar sesión</button></a>
            </div>
 
    </header>


    <div id="contenedor-fijo">
        <img src="" alt="">
        <div id="texto-encima">
            <p>Explora el mundo a todo color</p>
        </div>
    </div>

    <div id="contenedor-espacio"></div> <!-- Contenedor de espacio -->

    <div id="contenedor-horizontal">
        <div id="texto-izquierdo">Obras de arte en tendencia</div>
        <a id="enlace-derecho" href="tendencias.html">ver todas las tendencias</a>
    </div>

    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->

    <div class="gallery-container">
        <div class="gallery">
            <div class="image-container">
                <img src="1.jpg" alt="Exposición 1">
            </div>
            <div class="image-container">
                <img src="3.jpg" alt="Exposición 2">
            </div>
            <div class="image-container">
                <img src="5.jpg" alt="Exposición 3">
            </div>
            <div class="image-container">
                <img src="4.jpg" alt="Exposición 3">
            </div>
            <div class="image-container">
                <img src="RSC/A cute white with brown spots cat eating ramen (1).jpg" alt="Exposición 3">
            </div>
            <div class="image-container">
                <img src="RSC/A tan skin mayan queen all blue and gold elaborate (1).jpg" alt="Exposición 3">
            </div>
            <div class="image-container">
                <img src="RSC/blog profile image (3).jpg" alt="Exposición 3">
            </div>
            <div class="image-container">
                <img src="RSC/stunning still-life photo render of a Mexican Skul (1).jpg" alt="Exposición 3">
            </div>
           
            <!-- Agregar más imágenes según sea necesario -->
        </div>
    </div>

  
    <div id="contenedor-espacio"></div> <!-- Contenedor de espacio -->

    <div id="nuevo-contenedor-gris-small">
        <!-- Nuevo contenedor responsivo -->
        <div id="contenedor-horizontal">
            <!-- Contenido del contenedor horizontal -->
            <div id="texto-izquierdo">Obras de arte recientes</div>
            <a id="enlace-derecho" href="obras.html">ver todas las obras</a>
        </div>
        
    </div>

    <div id="nuevo-contenedor-gris">
        <div class="gallery-container-recientes">
            <div class="gallery-recientes">
              <!-- Tarjeta 1 -->
            <div class="card-recientes">
                <img class="card-img-recientes" src="RSC/A woman holds a large sign in her hand pop art.jpg" alt="Thumbnail">
                <div class="card-body-recientes">
                <h5 class="card-title-recientes">PopArt</h5>
                <p class="card-text-recientes">de Jimena JS</p>
                <div class="card-buttons-recientes">
                    <a href="http://www.tu-enlace-aqui.com" target="_blank">                   
                    </a>
                </div>
                </div>
            </div>
        <!-- Tarjeta 1 -->
        <div class="card-recientes">
            <img class="card-img-recientes" src="RSC/A cute white with brown spots cat eating ramen.jpg" alt="Thumbnail">
            <div class="card-body-recientes">
            <h5 class="card-title-recientes">"Ramensito"</h5>
            <p class="card-text-recientes">de Axl</p>
            <div class="card-buttons-recientes">
                <a href="http://www.tu-enlace-aqui.com" target="_blank">               
                </a>
            </div>
            </div>
        </div>
        <!-- Tarjeta 1 -->
        <div class="card-recientes">
            <img class="card-img-recientes" src="RSC/Cushion.jpg" alt="Thumbnail">
            <div class="card-body-recientes">
            <h5 class="card-title-recientes">Cushion</h5>
            <p class="card-text-recientes">de Jimena JS</p>
            <div class="card-buttons-recientes">
                <a href="http://www.tu-enlace-aqui.com" target="_blank">                
                </a>
            </div>
            </div>
        </div>
        <!-- Tarjeta 1 -->
        <div class="card-recientes">
            <img class="card-img-recientes" src="RSC/Pop art image of black man and woman representing .jpg" alt="Thumbnail">
            <div class="card-body-recientes">
            <h5 class="card-title-recientes">Pop Couple</h5>
            <p class="card-text-recientes">de Jimena JS</p>
            <div class="card-buttons-recientes">
                <a href="http://www.tu-enlace-aqui.com" target="_blank">                
                </a>
            </div>
            </div>
        </div>
        <!-- Tarjeta 1 -->
        <div class="card-recientes">
            <img class="card-img-recientes" src="RSC/portrait man pop art.jpg" alt="Thumbnail">
            <div class="card-body-recientes">
            <h5 class="card-title-recientes">American Men</h5>
            <p class="card-text-recientes">De Jimena JS</p>
            <div class="card-buttons-recientes">
                <a href="http://www.tu-enlace-aqui.com" target="_blank">         
                </a>
            </div>
            </div>
        </div>
        <!-- Tarjeta 1 -->
        <div class="card-recientes">
            <img class="card-img-recientes" src="RSC/detailed.jpg" alt="Thumbnail">
            <div class="card-body-recientes">
            <h5 class="card-title-recientes">Detallado </h5>
            <p class="card-text-recientes">de AxL</p>
            <div class="card-buttons-recientes">
                <a href="http://www.tu-enlace-aqui.com" target="_blank">
                </a>
            </div>
            </div>
        </div>
           
              
        </div>
    </div>    
    </div>
    

    <div id="contenedor-espacio"></div>

    <div id="texto-centrado">Ultimas Exposiciones</div>
    <div id="contenedor-espacio-small"></div>
    <div class="gallery2">
  <div class="photo">
    <img src="https://image.lexica.art/full_webp/57741a1a-df6b-4ce2-aeb4-34a12bca3f36" alt="Descripción imagen 1">
    <span>Luz y Sombra: Arte Contemporáneo</span>
  </div>
  <div class="photo big-cell">
    <img src="https://image.lexica.art/full_webp/1d018b1f-78b6-4306-b6c3-243f6322d430" alt="Descripción imagen 2">
    <span>Historias Mágicas: Arte Popular Mexicano</span>
  </div>
  <div class="photo">
    <img src="https://image.lexica.art/full_webp/06e805e4-c05d-476c-b569-f16cecea1534" alt="Descripción imagen 3">
    <span>Reflejos del Tiempo: Fotografía Mexicana</span>
  </div>
</div>

    <div id="contenedor-espacio-small"></div>

    <div id="enlace-centrado"><a id="enlace-centrado" href="agenda.html">Exposiciones futuras</a></div>

    <div id="contenedor-espacio"></div>

    <div id="nuevo-contenedor-azul-small">
        <!-- Nuevo contenedor responsivo -->
        <div id="contenedor-horizontal">
            <!-- Contenido del contenedor horizontal -->
            <div id="texto-izquierdo">¿Cuál es tu estilo?</div>
            <a id="enlace-derecho" href="estilos.html">ver todas los estilos</a>
        </div>
    </div>

    <div id="nuevo-contenedor-azul">  
        <div class="container">
            <div class="grid">
            <div class="grid-item span-2">
                <a href="estilos.php#popart">
                <img src="RSC/a crazy party man.JPG" alt="Descripción de la imagen">
                <div class="text-overlay">Pop Art</div>
                </a>
            </div>
            <div class="grid-item span-2">
                <a href="estilos.php#renacimiento">
                    <img src="RSC/Very handsome young man with glowing eyes.JPG" alt="Descripción de la imagen">
                    <div class="text-overlay">Renacimiento</div>
                </a>
            </div>

            <div class="grid-item">
                <a href="estilos.php#expresionismo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Ernst_Ludwig_Kirchner_Zirkusreiterin_1913-1.jpg/800px-Ernst_Ludwig_Kirchner_Zirkusreiterin_1913-1.jpg" alt="Descripción de la imagen">
                    <div class="text-overlay">Expresionismo</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="estilos.php#cubismo">
                    <img src="RSC/Pablo Picasso design.JPG" alt="Descripción de la imagen">
                    <div class="text-overlay">Cubismo</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="estilos.php#barroco">
                    <img src="RSC/Vintage oil painting in the baroque style of 'Sour.JPG" alt="Descripción de la imagen">
                    <div class="text-overlay">Barroco</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="estilos.php#surrealismo">
                    <img src="RSC/The Venus offering a huge bright diamond to Igor S.JPG" alt="Descripción de la imagen">
                    <div class="text-overlay">Surrealismo</div>
                </a>
            </div>

            </div>
        </div>
    </div>

    <div id="contenedor-espacio"></div>

    <div id="texto-centrado">¿Quiénes Somos?</div>
    <div id="contenedor-espacio-small"></div>
    <div id="contenedor-dos-columnas">
    <div class="columna-imagen">
        <div id="imagen-contenedor">
            <img src="RSC/Logo_sin_texto-removebg-preview.png" alt="Tu imagen">
        </div>
    </div>
    <div class="columna-texto">
        <p>Somos una vibrante galería de arte comprometida con la promoción y celebración del talento artístico local. En el corazón de nuestra misión está la pasión por descubrir y dar a conocer a artistas emergentes de nuestra comunidad. Desde su fundación, nuestra galería se ha convertido en un espacio creativo en constante evolución, donde el arte se convierte en una poderosa forma de conexión entre artistas y amantes del arte.</p>
        <p>Nuestra misión es simple pero poderosa: brindar un escaparate a los artistas locales para que compartan sus visiones únicas con el mundo. Creemos firmemente en el potencial artístico que reside en nuestras comunidades, y estamos decididos a brindarles una plataforma donde sus obras puedan brillar. </p>
    </div>
    </div>
    
   

    <div id="contenedor-espacio"></div>

    <div id="nuevo-contenedor-gris-small">
        <!-- Nuevo contenedor responsivo -->
        <div id="contenedor-horizontal">
            <!-- Contenido del contenedor horizontal -->
            <div id="texto-izquierdo">Conoce a los artistas</div>
            <a id="enlace-derecho" href="artista.html">ver todos los artistas</a>
        </div>
    </div>
    <div id="nuevo-contenedor-gris">
        <div class="gallery-container-recientes">
            <div class="gallery-recientes">
<!-- Tarjeta 1 -->
                <div class="card-recientes-artista">
                <a href="artista_bio.php"  name="Gege Akutami">
                <img class="card-img-recientes-artista" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoZREmEuLolcBGvVhU17p5MOS8TypQEUYuXafMzC_rnyg9eb0Etsb2fCX_eVuNboQYpT4&usqp=CAU" alt="Thumbnail">
            </a>
                <div class="card-body-recientes-artista">
                <h5 class="card-title-recientes-artista">Luc Villard</h5>
                <p class="card-text-recientes-artista">(1955-Actualidad)</p>

                </div>
                </div>
<!-- Tarjeta 1 -->
                <div class="card-recientes-artista">
                    <a href="artista_bio Leonardo Da Vinci.php"  name="Marcell Art">
                        <img class="card-img-recientes-artista" src="https://konfio-blog.s3.us-west-2.amazonaws.com/wp-content/uploads/2019/05/02113926/la-vida-de-leonardo-da-vinci-y-su-lado-emprendedor.jpg" alt="Thumbnail">
                </a>
                    <div class="card-body-recientes-artista">
                    <h5 class="card-title-recientes-artista">Leonardo Da Vinci</h5>
                    <p class="card-text-recientes-artista">(1452-1519)</p>
    
                    </div>
                </div>
<!-- Tarjeta 1 -->
                <div class="card-recientes-artista">
                    <a href="artista_bio Roy Fox Lichtenstein.php"  name="Jimena JS">
                        <img class="card-img-recientes-artista" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Roy_Lichtenstein.jpg/800px-Roy_Lichtenstein.jpg" alt="Thumbnail">
                </a>
                    <div class="card-body-recientes-artista">
                    <h5 class="card-title-recientes-artista">Roy Fox Lichtenstein</h5>
                    <p class="card-text-recientes-artista">(1923-1997) </p>
    
                    </div>
                </div>
<!-- Tarjeta 1 -->
                <div class="card-recientes-artista">
                    <a href="artista_bio Andy Warhol.php" name="AxL">
                        <img class="card-img-recientes-artista" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Andy_Warhol_at_the_Jewish_Museum_%28by_Bernard_Gotfryd%29_–_LOC.jpg/640px-Andy_Warhol_at_the_Jewish_Museum_%28by_Bernard_Gotfryd%29_–_LOC.jpg" alt="Thumbnail">
                </a>
                    <div class="card-body-recientes-artista">
                    <h5 class="card-title-recientes-artista">Andy Warhol</h5>
                    <p class="card-text-recientes-artista">(1928-1987)</p>
    
                    </div>
                </div>
<!-- Tarjeta 1 -->
            </div>
        </div>
    </div>    
    </div>


    <div id="contenedor-espacio"></div>

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
                <a href="#"><img src="RSC/60fea6773d624000048712b5.PNG" alt="Facebook">  /Facebook</a>
                <a href="#"><img src="https://static.vecteezy.com/system/resources/previews/016/716/486/original/twitter-icon-free-png.png" alt="Twitter">  /Twitter</a>
            </div>
            <div class="columna-redes">
                <a href="#"><img src="https://i.pinimg.com/originals/3b/21/c7/3b21c7efd2ba9c119fb8d361acacc31d.png" alt="Instagram">   /Intagram</a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn"> /LinkedIn</a>
            </div>
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
    
    
<script src="script.js"></script>
</body>
</html>
