window.onload = () => {

 /* Formulario */
  var formulario = document.getElementById("form");
  /* Campos */
  var nombre = document.getElementById("name");
  var apellido = document.getElementById("lastname");
  var pass = document.getElementById("password");
  var confirmPass = document.getElementById("password-confirm");
  var avatar = document.getElementById("avatar");

  var errores = "";

  if(errores == 0){
   //formulario.onsubmit();
  } 
   if(errores++){
    formulario.onsubmit = (event) => {
      /* Primero paro el envio */
     event.preventDefault();
   
     
      /* analizo los campos */
      if (nombre.value.length < 3) {
       alert("El nombre debe tener más de 3 caracteres");
       } 
      
       if (apellido.value == '') {
     
       alert("Ingrese su apellido");
       }
  
       /* Validar la pass */
       if(pass.value.length < 8) {
       alert("La contraseña debe contener 8 caracteres")
       }
     if (confirmPass.value != pass.value) {
       alert("No coinciden ambas contraseñas");
       } 
  
       /*Validar un campo avatar*/
       if (!(/\.(jpg|jpeg|png)$/i).test(avatar)) {
       alert('El archivo debe ser jpg, jpeg o png');
       } 
  }
  }
 
   
  }
