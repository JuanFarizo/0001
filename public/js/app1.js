//require('./bootstrap');
window.onload = function(){

    var nombre = document.getElementById("name");
    var apellido = document.getElementById("lastname");
    var email = document.getElementById("email");
    var pass = document.getElementById("password");
    var confirmPass = document.getElementById("password-confirm");
    var avatar = document.getElementById("avatar");
   
    
    var formulario = document.getElementById("form");
    var elementosForm = formulario.elements;
    var elementoArray = Array.from(elementosForm);
    elementoArray.pop();
    elementoArray.forEach( function(element) {
        element.addEventListener("blur", function(){
            if ( this.value == "" ) {
                this.classList.add("error");
            //VALIDACION DE CAMPO NOMBRE
                nombre.submit = function() {
                    if( this.value.trim() == "" ) {
                    alert("El campo nombre no puede estar vacío");
                  }  else if(this.value.length < 7) {
                    alert("Debes ingresar un nombre de 7 letras");
                 }
                }
                //VALIDACION CAMPO APELLIDO
                apellido.onblur = function() {
                    if( this.value.trim() == "" ) {
                    alert("El campo apellido no puede estar vacío");
                }
                }

                //VALIDACION CAMPO EMAIL
                email.onblur = function() {
                    if( this.value == "" ) {
                    alert("El campo email no puede estar vacío");
                   } 
                 }

                 //VALIDACION CAMPO PASSWORD Y CONFIRMAR PASS
  if (pass.value != confirmPass.value || pass.value == "" && confirmPass.value == ""){
    pass.focus();
    return false;
  } else {
    document.getElementsByClassName("invalid-feedback").innerHTML = "";
  }

   //VALIDACION CAMPO AVATAR
    
   if (!(/\.(jpg|jpeg|png)$/i).test(avatar.value)) {
    alert('El archivo debe ser jpg, jpeg o png');
} else {
    var img = new Image();
    img.onload = function () {
        if (this.width != 400 && this.height != 400) {
            alert('Las medidas deben ser: 400 * 400');
        }
    }
 }

    }
    })
    });


}