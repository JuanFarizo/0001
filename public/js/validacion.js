window.onload = () => {

    /* Formulario */
    var formulario = document.getElementById("form");

    /* Campos */
    var nombre = document.getElementById("name");
    var apellido = document.getElementById("lastname");
    var email = document.getElementById("email");
    var pass = document.getElementById("password");
    var confirmPass = document.getElementById("password-confirm");
    // var avatar = document.getElementById("avatar");
    /* Escucho cuando envie el formulario */
    formulario.onsubmit = (event) => {
      /* Primero paro el envio */
      event.preventDefault();
      
      /* analizo los campos */
      if (nombre.value == "") {
        alert("El campo nombre no debe estar vacío");
      }
      if (apellido.value == "") {
        alert("El campo apellido no debe estar vacío");
      }

      /* Validar un email */
      // Con type email ya valida con js que tiene que ser un email

      /* Validar la pass */
      if(pass.value.length < 8) {
        alert("La contraseña debe contener 8 caracteres")
      }
       if (confirmPass.value != pass.value) {
        alert("No coinciden ambas contraseñas");
      } else{
        return true;
      }

    }   
  }