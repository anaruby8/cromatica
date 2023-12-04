function enviarDatos() {
    const inputFotografias = document.getElementById("fotografias");
    if (inputFotografias.files.length > 4) {
      alert("Por favor, selecciona un máximo de 4 imágenes.");
      return;
    }

    const correo = document.getElementById("correo").value;
    if (!validarCorreo(correo)) {
        alert("Por favor, ingresa una dirección de correo electrónico válida.");
        document.getElementById("correo").classList.add("error");
        return;
    }
  
    const inputs = document.querySelectorAll("form input, select");
    let camposVacios = false;
  
    inputs.forEach(input => {
      if (input.value.trim() === "") {
        input.classList.add("error");
        camposVacios = true;
      } else {
        input.classList.remove("error");
      }
    });
  
    if (camposVacios) {
      alert("Por favor, completa todos los campos.");
      return;
    }
  
    if (confirm("¿Confirmas el envío de datos?")) {
      alert("Datos enviados correctamente.");
      document.getElementById("formulario").reset();
    }
  }
  
  function cancelarEnvio() {
    alert("Envío cancelado.");
    document.getElementById("formulario").reset();
  }
  
  function limpiarFormulario() {
    document.getElementById("formulario").reset();
    const inputs = document.querySelectorAll("input, select");
    inputs.forEach(input => {
      input.classList.remove("error");
    });
  }

  function validarCorreo(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
  }
  
  