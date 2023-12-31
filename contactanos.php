<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contactanos</title>
    <link rel="stylesheet" href="stylesContactanos.css">

    <?php require('./Layouts/header.php')?>
<!-- header -->   

<!-- cuerpo --> 
    <div id="contenedor-espacio-small"></div> <!-- Contenedor de espacio -->
    <div id="contenedor-espacio"></div>
    <div id="contenedor-espacio"></div>

    <div id="contenedor-horizontal">
        <div id="texto-izquierdo">Envia tus obras</div>
    </div>
    <div id="contenedor-espacio-small"></div>

    <div id="contenedor-blanco-small-bordes">
        <div id="textoplano-izquierdo">LLena el siguiente formulario, adjunta fotos de tu obra y, nos mantendremos en contacto si es seleccionada</div>
    </div>

<!-- formulario -->
    <div id="contenedor_formulario">
    <form id="formulario" action="procesar_formulario.php" metod="post" enctype="multipart/form-data">
        <!-- <form id="formulario" onsubmit="enviarDatos(); return false;"> -->
        <label for="nombre">Nombre*</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
    
        <label for="apellidos">Apellidos*</label>
        <input type="text" id="apellidos" placeholder="Ingrese sus apellidos" required>
    
        <label for="edad">Edad*</label>
        <input type="number" id="edad" placeholder="Ingrese su edad" required>
    
        <label for="direccion">Dirección*</label>
        <input type="text" id="direccion" placeholder="Ingrese Pais, Estado, Municipo, Colonia, Calle y Número" required>
    
        <label for="correo">Correo Electrónico*</label>
        <input type="email" id="correo" placeholder="Ingrese su correo electronico" required>
    
        <label for="telefono">Teléfono*</label>
        <input type="tel" id="telefono" placeholder="Ingrese su número teléfonico" required>
    
        <label for="obra">Nombre de la Obra*</label>
        <input type="text" id="obra" placeholder="Ingrese el nombre de la obra" name="obra" required>
    
        <label for="medidas">Medidas*</label>
        <input type="text" id="medidas" placeholder="Ingrese en formato de centímetros o pixeles (100cm x 200cm o 200px x 300px)" required>
    
        <label for="formato">Estilo*</label>
        <select id="formato" name="formato" required>
          <option value="digital">Dígital</option>
          <option value="fisico">Físico</option>
        </select>

        <label for="detalles">Detalles*</label>
        <input type="textarea" id="detalles" rows="4" cols="50" placeholder="Dinos más sobre tu obra" required>
    
        <label for="fotografias">Subir Fotografías (mínimo 1, máximo 4)</label>
        <input type="file" id="file" name="file" accept="image/*" required>
    
        <button type="submit">Enviar</button>
        <a href="home.php"><button type="button" class="cancel" onclick="cancelarEnvio()">Cancelar</button></a>
        <button type="button" class="clear" onclick="limpiarFormulario()">Limpiar</button>
      </form>
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
    
<script src="scriptContactanos.js"></script>
</body>
</html>
