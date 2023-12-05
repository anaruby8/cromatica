<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agenda</title>
    <link rel="stylesheet" href="stylesAgenda.css"> <!-- Enlace al archivo CSS externo -->
    <?php require('./Layouts/header.php')?>
<!-- header -->   

<!-- cuerpo --> 
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div>
    <div id="contenedor-espacio"></div>

    <div id="contenedor-horizontal-small">
        <div id="texto-izquierdo">Agenda de Exposiciones</div>
</div>

        <div class="filter-bar">
            <p>Filtrar por</p>
            <button class="filter-btn" onclick="filterEvents('all')">Todos los eventos</button>
            <p>/</p>
            <button class="filter-btn" onclick="filterEvents('upcoming')">Eventos Proximos</button>
            <p>/</p>
            <button class="filter-btn" onclick="filterEvents('past')">Eventos Pasados</button>
        </div>
        
        <div class="event-container" id="events">
          <!-- Los eventos se insertarán aquí mediante JavaScript -->
        </div>

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
    
<script src="scriptAgenda.js"></script>
</body>
</html>
