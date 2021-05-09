//Crea una web en la que aparezca una calculadora con un formato 
// CSS atractivo para los usuarios y que ejecute al menos cada una 
// de las cuatro operaciones aritméticas básicas: suma, resta, 
// multiplicación y división; además de contar con un botón que 
// limpie la pantalla y elimine la información registrada. Tanto 
// el formato CSS como la funcionalidad de la calculadora deben 
// aparecer de forma externa.

function insertar (numero) {

    $('#pantalla').val($('#pantalla').val() + numero);
}
function igual (){

    var resultado = $('#pantalla').val().replace(/÷/g,'/').replace(/x/g,'*');// /x/g /÷/g expresiones regulares
    $('#pantalla').val(eval(resultado));
}
function limpiar() {
    
    $('#pantalla').val('');
}