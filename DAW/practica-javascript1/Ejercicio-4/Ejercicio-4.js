//Explica brevemente qué pasa línea por línea en el siguiente código e indica cuál será el resultado en pantalla:

function funcion(){
    var modelos = [ "Monovolumen", "Berlina", "Todoterreno" ];//Crea un Array con 3 String
    modelos.push("Roadster");//Añade el String Roadster al final del Array
    modelos.unshift("Deportivo");//Añade el String Deportivo al principio del Array
    modelos.pop();//Elimina el ultimo elemento del Array
    alert(modelos);//Imprime los elementos de modelos "Deportivo,Monovolumen,Berlina,Todoterreno"
}