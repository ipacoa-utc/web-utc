'use strict';
let input_telefono = document.querySelector('input[name="telefono"]');
const field = input_telefono.dataset.js;

const masks = {
    telefono (value) {
        return value
        .replace(/\D+/g, '')
        .replace(/(\d{4,4})(\d)/, '$1 - $2')
        // .replace(/(\d{4})(\d{1,2})/, '$1-$2')
        .replace(/( - \d{4,4})\d+?$/, '$1');
    }
}
input_telefono.addEventListener('input', (e)=>{
    e.target.value = masks[field](e.target.value);
});