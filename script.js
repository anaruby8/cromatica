      
        // Aquí estoy usando una variable simulada. Puedes reemplazar esto con la lógica real de tu aplicación.

        var loggedIn = true; // Cambia esto a true para simular que el usuario ha iniciado sesión.

        // Obtén una referencia al elemento que se oculta/muestra
        var loggedInContent = document.getElementById('logged-in-content');

        // Verifica si el usuario ha iniciado sesión y ajusta la visibilidad del elemento en consecuencia
        if (loggedIn) {
            loggedInContent.style.display = 'block';
        } else {
            loggedInContent.style.display = 'none';
        }

document.addEventListener('DOMContentLoaded', (event) => {
    const galleryElement = document.querySelector('.gallery');
    galleryElement.addEventListener('wheel', (e) => {
      // Previene el desplazamiento vertical predeterminado
      e.preventDefault();
  
      // Desplaza la galería horizontalmente en vez de verticalmente
      galleryElement.scrollBy({
        left: e.deltaY < 0 ? -100 : 100, // Cambia el valor numérico para ajustar la sensibilidad
        behavior: 'smooth' // Esto hace que el desplazamiento sea más suave
        
      });
    });
  });

  document.addEventListener('DOMContentLoaded', (event) => {
    const galleryElement2 = document.querySelector('.gallery-recientes');
    galleryElement2.addEventListener('wheel', (e) => {
      // Previene el desplazamiento vertical predeterminado
      e.preventDefault();
  
      // Desplaza la galería horizontalmente en vez de verticalmente
      galleryElement2.scrollBy({
        left: e.deltaY < 0 ? -100 : 100, // Cambia el valor numérico para ajustar la sensibilidad
        behavior: 'smooth' // Esto hace que el desplazamiento sea más suave
        
      });
    });
  });


  document.addEventListener('DOMContentLoaded', function () {
    // Realizar una solicitud AJAX para obtener la información de autenticación desde PHP
    fetch('validar.php')
        .then(response => response.json())
        .then(data => {
            // Verificar la respuesta del servidor
            if (data.autenticado) {
                // Usuario autenticado, hacer visible el menú desplegable y ocultar el botón
                var menuDesplegable = document.getElementById('dropdown');
                menuDesplegable.style.display = 'block';

                var botonOculto = document.getElementById('login-container');
                botonOculto.style.display = 'none';
            } else {
                // Usuario no autenticado, puedes manejar esto de otra manera si es necesario
                console.log('Usuario no autenticado');
            }
        })
        .catch(error => {
            console.error('Error al obtener información de autenticación:', error);
        });
});


  // Función para abrir la ventana modal
function openModal(imgElement) {
  // Obtener la ventana modal y la imagen dentro de ella
  var modal = document.getElementById('popup');
  var modalImg = document.getElementById('expandedImg');
  // Mostrar la ventana modal
  modal.style.display = "block";
  // Cambiar la fuente de la imagen en la ventana modal por la de la imagen clickeada
  modalImg.src = imgElement.src;
}

// Función para cerrar la ventana modal
function closeModal() {
  var modal = document.getElementById('popup');
  modal.style.display = "none";
}

function mostrar(){
  document.getElementById('Contactanos').style.display='block';
}
function ocultar(){
  document.getElementById('login-button').style.display='none';
}
  