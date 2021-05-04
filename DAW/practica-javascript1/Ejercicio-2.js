var pregunta;
var acertadas = 5;
pregunta = prompt("Cuanto es 2x1");
if (pregunta != 2) {
    acertadas -= 1;
}
pregunta = prompt("Cuanto es 5x5");
if (pregunta != 25) {
    acertadas -= 1;
}
pregunta = prompt("Cuanto es 7x3");
if (pregunta != 21) {
    acertadas -= 1;
}
pregunta = prompt("Cuanto es 9x7");
if (pregunta != 63) {
    acertadas -= 1;
}
pregunta = prompt("Cuanto es 7x7");
if (pregunta != 49) {
    acertadas -= 1;
}
alert("has acertado " + acertadas);