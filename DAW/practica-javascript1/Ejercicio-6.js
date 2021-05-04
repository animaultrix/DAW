/*Desarrolla una función en la que se pida al usuario que ingrese una frase 
  y la web responda con la cantidad de caracteres que se han escrito y las veces
  que se repite cada uno de los que forman la frase.*/

var _frase = prompt('Introduce frase');
var _letras = _frase.split('');
var _tamano = 0;
var _cantidadDeCadaLetra = '';

//Se cuenta la cantidad de cada caracter sin contar espacios en blanco
function cuenta(){
    while(_letras.length != 0){
    
        var _cantidad = 0;
        var _letra = _letras[0];
        for (var i = 0; i < _letras.length; i++) {
    
            if(_letras[i]==_letra){
                
                if (_letra == " "){
                    _letras.splice(i,1);
                    --i;}
                else{
                    ++_tamano;
                    ++_cantidad;
                    _letras.splice(i,1);
                    --i;
                }          
            }    
        }
        if (_letra != " ") {
    
            if(_cantidad > 1){
                _cantidadDeCadaLetra += 'La letra "'+_letra+'" se repite '+_cantidad+' veces.\n';
            }
            else{
                _cantidadDeCadaLetra += 'La letra "'+_letra+'" se repite una vez.\n';
            }
        }
    }
    //Se imprime
    console.log(_tamano);
    console.log(_cantidadDeCadaLetra);
    alert('La frase "'+_frase+'" contiene '+_tamano+' caracteres. \nSus caracteres se repiten:\n'+_cantidadDeCadaLetra);
}