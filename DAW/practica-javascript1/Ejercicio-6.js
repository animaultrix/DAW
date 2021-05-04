/*Desarrolla una función en la que se pida al usuario que ingrese una frase 
  y la web responda con la cantidad de caracteres que se han escrito y las veces
  que se repite cada uno de los que forman la frase.*/

var frase = prompt('Introduce frase');
var letras = frase.split('');
var x = letras;
var tamano = 0;
var hay= '';
for (let index = 0; index < frase.length; index++) {
    var element = letras[index];
    if (element != " ") {
        ++tamano;
        var cantidad = 0;
        do{    
            for (let i = 0; i < x.length; i++) {
                if(x[i]==element){
                    ++cantidad;
                    x.splice(i,1);
                    console.log(x);                       
                }
                if(x.length==1)++cantidad;         
            }
        }while(x.length>0 && x[0] == element);
        console.log('hay '+ cantidad +' '+element+'\n');
        hay.concat('hay '+ cantidad +' '+element+'\n');
        console.log('letras = '+letras);
    }
}
console.log(tamano);

alert('La frase '+frase+' Contiene '+tamano+' letras \n'+hay);