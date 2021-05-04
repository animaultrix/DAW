// Crea tres objetos que contengan un nombre, una edad, una ocupación y una cantidad diferente de intereses.

function objetos() {

    //Objetos Literales
    var personaLi = {
        nombre: 'Juan',
        edad: 15,
        ocupacion: 'estudiante',
        intereses: 2,    
    }
    //Programación Orientada a Objetos
    class PersonaPOO {
        
        constructor (nombre, edad, ocupacion, intereses){
            this.nombre = nombre;
            this.edad = edad;
            this.ocupacion = ocupacion;
            this.intereses = intereses;       
        }
    }
    const persona1 = personaLi;
    const persona2 = new PersonaPOO("Jorge", 23, "recepcionista", 5);
    const persona3 = new PersonaPOO("Julia", 40, "escritora", 9);

    //Mostrar datos
    console.log(persona1, persona2, persona3);
    alert(' Nombre: '+persona1.nombre+' Edad: '+persona1.edad+' Ocupación: '+persona1.ocupacion+' Intereses: '+persona1.intereses+
        '\n Nombre: '+persona2.nombre+' Edad: '+persona2.edad+' Ocupación: '+persona2.ocupacion+' Intereses: '+persona2.intereses+
        '\n Nombre: '+persona3.nombre+' Edad: '+persona3.edad+' Ocupación: '+persona3.ocupacion+' Intereses: '+persona3.intereses
    );
}