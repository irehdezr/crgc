var botonIniciarSesion = document.querySelector('#btnIniciarSesion');
var botonRegistrarUsuario = document.querySelector('#btnRegistrarUsuario');

botonIniciarSesion.addEventListener('click',iniciarSesion);
botonRegistrarUsuario.addEventListener('click',validarTodasRespuestas); 

function imprimirArreglo(pMatriz){
  var fnCantFilas = pMatriz.length,
      fnCantColumnas = pMatriz[0].length;

  for(var i = 0; i < fnCantFilas ; i++){
    for(var j = 0; j < fnCantColumnas ; j++){
      document.write(pMatriz[i][j] + '<br>');
    }
  }
}

function iniciarSesion(){
	comenzarSesion(aListaNombres);

}

function paraProbarComunicacion(){
	determinarRol();
}

function validarTodasRespuestas(){
  var fbNombre = validarNombre(); 
  var fbApellidos = validarApellidos();
  var fbCorreo = validarCorreo(); /*
  var fbContrasena = validarContrasena();
  var fbContrasenaConf = validarContrasenaConfirm(); */
  var fbCaptcha = validarCaptcha();
  var fbAmbasCont = validarAmbasContrasenas();

  if(fbNombre == true || fbApellidos == true || fbCorreo == true /*|| fbContrasena == true || fbContrasenaConf == true */|| fbCaptcha == true || fbAmbasCont == true){
    /*alert('Por favor ingrese los valores en las casillas marcadas en rojo'); */console.log('Paso una vez')
  } else {
    redirect();
  }
}

function mostrarCaptcha(){
  var fsCaptcha = generarCaptcha();
  var fsResultado = document.createElement('p');
  var fsCaptchaLive = document.createTextNode(fsCaptcha);

  fsResultado.appendChild(fsCaptchaLive);
  document.querySelector('#captcha').appendChild(fsResultado);
}