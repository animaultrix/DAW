//Desarrolla un pequeño script haciendo uso de jQuery en el que se
//lance un mensaje de alerta al hacer clic en un botón cuya id es botonActivador.
       
$(document).ready(function() {  
      
    $("#botonActivador").click(function(){     

        alert("Evento con jQuery");
    });
});