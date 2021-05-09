$(document).ready(function () {
    
    /********************************
        Estado inicial oculto
    *********************************/
    $('#modal').hide();
    $('#btn-cerrar').hide();
    /********************************
                Botonera
    *********************************/
    $('#limpiar').click(function () { 
    
        $('#pantalla').val('0');
    });
    $('#insdiv').click(function () { 
    
        insertar('÷');
    });
    $('#insx').click(function () { 
    
        insertar('x');
    });
    $('#ins-').click(function () { 
    
        insertar('-');
    });
    $('#ins7').click(function () { 
    
        insertar(7);
    });
    $('#ins8').click(function () { 
    
        insertar(8);
    });
    $('#ins9').click(function () { 
    
        insertar(9);
    });
    $('#insmas').click(function () { 
    
        insertar("+");
    });
    $('#ins4').click(function () { 
    
        insertar(4);
    });
    $('#ins5').click(function () { 
    
        insertar(5);
    });
    $('#ins6').click(function () { 
    
        insertar(6);
    });
    $('#ins1').click(function () { 
    
        insertar(1);
    });
    $('#ins2').click(function () { 
    
        insertar(2);
    });
    $('#ins3').click(function () { 
    
        insertar(3);
    });
    $('#insigual').click(function () { 
    
        igual();
    });
    $('#ins0').click(function () { 
    
        insertar(0);
    });
    $('#inspunto').click(function () { 
    
        insertar('.');
    });
    /********************************
        Botones de abrir y cerrar
    *********************************/
    $('#btn-cerrar').click(function () { 
    
        cerrar();
    });
    $('#btn-abrir').click(function () { 
    
        abrir();
    });
});
/********************************
        Cerrar calculadora
*********************************/
function cerrar() {
    
    $('#modal').hide(3000);
    $('#btn-cerrar').hide(3000);
}
/********************************
        Abrir calculadora
*********************************/
function abrir(){
    $('#modal').show(3000);
    $('#btn-cerrar').show(3000);
}
/********************************
Insertar caracteres en pantalla
*********************************/
function insertar (caracter) {

    if ($('#pantalla').val() == '0' && caracter != "." && caracter != 'x' && caracter != '-' && caracter != '+' && caracter != '÷') {

        $('#pantalla').val("");
        if ($('#pantalla').val().length < 16) {

            $('#pantalla').val($('#pantalla').val() + caracter);
        }
         else{
    
            $('#pantalla').val("Excede de tamaño ");
        } 
    }
    else{
        if ($('#pantalla').val().length < 16) {

            $('#pantalla').val($('#pantalla').val() + caracter);
        }
         else{
    
            $('#pantalla').val("Excede de tamaño ");
        } 
    }    
}
/********************************
        Función igual
*********************************/
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

        if (eval(resultado).toFixed(2).toString().length < 17) {

            $('#pantalla').val(eval(resultado).toFixed(2));
        }
         else{

            $('#pantalla').val("Excede de tamaño ");
        }
    }
}