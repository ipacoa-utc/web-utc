'use strict';

//elementos

const nombre = document.querySelector('input[name="nombre"]');
const correo = document.querySelector('input[name="email"]');
const telefono = document.querySelector('input[name="telefono"]');
const mensaje = document.querySelector('textarea[name="mensaje"]');
const btn_enviar = document.querySelector('#btn_enviar');
const btn_cancelar = document.querySelector('#btn_cancelar'); 
const error_nombre =  document.querySelector('#error_nombre');
const error_telefono =  document.querySelector('#error_telefono');
const error_correo =  document.querySelector('#error_correo');
const error_mensaje = document.querySelector('#error_mensaje');
const inputs_requeridos = document.querySelectorAll('[required]');
const expresionText = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
const form = document.querySelector('#form');
const expresionEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;


//validaciones
const validarTexto = () => {
    let error = false;
    if(nombre.value == "")  {
        nombre.classList.add('input_error');
        error_nombre.innerText = "¡Por favor ingrese el nombre!";
        btn_enviar.disabled = true;
        error = true;
    }

    else if (!expresionText.test(nombre.value)) {
        nombre.classList.add('input_error');
        error_nombre.innerText = "¡No se permiten números o caracteres especiales!";
        btn_enviar.disabled = true;
        error = true;
    }
    else {
        nombre.classList.remove('input_error');
        error_nombre.innerText = ""
        btn_enviar.disabled = false;
        error = false;
    }
    return error;
}
const validarNumeros = () => {
    let error = false;
    if(telefono.value == "")  {
        telefono.classList.add('input_error');
        error_telefono.innerText = "¡Por favor ingrese el número de télefono!";
        btn_enviar.disabled = true;
        error = true;
     }else {
        telefono.classList.remove('input_error');
        error_telefono.innerText = " "
        btn_enviar.disabled = false;
        error = false;  
    }
    return error ;

}

const validarMail = () => {
    let error = false;
     if(correo.value == "")  {
        correo.classList.add('input_error'); 
        error_correo.innerText = "¡Por favor ingrese el Correo eléctronico!";
        btn_enviar.disabled = true;
        error = true;
    } else if (!expresionEmail.test(correo.value)) {
        correo.classList.add('input_error');
        error_correo.innerText = "Email incorrecto: example123@gmail.com";
        btn_enviar.disabled = true;
        error = true;
    }else {
        correo.classList.remove('input_error');
        error_correo.innerText = " "
        btn_enviar.disabled = false;
        error = false;
    }
    return  error;

}
const validarMensaje = () => {
    let error = false;

    if(mensaje.value == "")  {
        mensaje.classList.add('input_error');
        error_mensaje.innerText = "¡Por favor ingrese el mensaje que desea comunicar!";
        btn_enviar.disabled = true;
        error = true;
    }
    else {
        mensaje.classList.remove('input_error');
        error_mensaje.innerText = " "
        btn_enviar.disabled = false;
        error = false;
    }
    return  error;
}

btn_cancelar.addEventListener('click', ()=>{
    form.reset();
    error_correo.innerText = "";
    error_mensaje.innerText = "";
    error_telefono.innerText = "";
    error_nombre.innerText = "";
    btn_enviar.disabled = false;   
    inputs_requeridos.forEach(input => {
        input.classList.remove('input_error');
    });
});
btn_enviar.addEventListener('click',()=>{
    validarMail();
    validarTexto();
    validarNumeros();
    validarMensaje();
    if(validarMail() ||  validarTexto() ||    validarNumeros() ||    validarMensaje()   ){
        btn_enviar.disabled = true;
    }
    else{
        btn_enviar.disabled = false; 
    }
  
})
nombre.addEventListener('focusout', validarTexto);
telefono.addEventListener('focusout', validarNumeros);
correo.addEventListener('focusout', validarMail);
mensaje.addEventListener('focusout', validarMensaje);