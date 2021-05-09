$(document).ready(function () {
    $('#modal').hide();
    $('#btn-cerrar').hide();
});
function cerrar() {
    
    $('#modal').hide(3000);
    $('#btn-cerrar').hide(3000);
}
function abrir(){
    $('#modal').show(3000);
    $('#btn-cerrar').show(3000);
}
function insertar (numero) {

    if ($('#pantalla').val() == 0 && numero != "." && $('#pantalla').val() != '0.' && numero != 'x' && numero != '-' && numero != '+' && numero != '÷') {

        $('#pantalla').val("");
        if ($('#pantalla').val().length < 16) {

            $('#pantalla').val($('#pantalla').val() + numero);
        }
         else{
    
            $('#pantalla').val("Excede de tamaño ");
        } 
    }
    else{
        if ($('#pantalla').val().length < 16) {

            $('#pantalla').val($('#pantalla').val() + numero);
        }
         else{
    
            $('#pantalla').val("Excede de tamaño ");
        } 
    }    
}
function igual (){

    var resultado = $('#pantalla').val().replace(/÷/g,'/').replace(/x/g,'*');// /x/g /÷/g expresiones regulares
    try {

        eval(resultado); 
    } catch (e) {

        if (e instanceof SyntaxError) {
            
            console.log(e.message);
            $('#pantalla').val("Error de sintaxis   ");
        }
    }
    if (Number.isInteger(eval(resultado))) {

        if (eval(resultado).toString().length < 17) {

            $('#pantalla').val(eval(resultado));
        }
         else{

            $('#pantalla').val("Excede de tamaño ");
        }    
        
    } else {

        if (eval(resultado).toString().length < 17) {

            $('#pantalla').val(eval(resultado).toFixed(2));
        }
         else{

            $('#pantalla').val("Excede de tamaño ");
        }
    }
}
function limpiar() {

    $('#pantalla').val('0');
}