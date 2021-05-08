//Crea un método que reciba dos valores y devuelva la suma de estos
//después de imprimirlos en pantalla solo si el resultado de la suma de ambos es mayor que 100.
function dameDatos() {
   var num1= prompt("introduce número 1");
   var num2= prompt("introduce número 2");
   suma(num1,num2);
}
function suma( num1,  num2){
    var resultado = Number(num1) + Number(num2);
    if (resultado>100) {
        alert(num1+"+"+num2+"="+resultado+">100");
    }else return resultado;    
}