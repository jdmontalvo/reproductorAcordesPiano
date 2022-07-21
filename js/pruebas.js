var historial=[];
var tabla=document.querySelector('.tablaTonalidad ')
tabla.addEventListener("click", getData)

function getData(){
var tds = event.path[1].children
 var datos = []
 for (var i = 0; i < tds.length; i++) {
  datos.push(tds[i].innerText)
 }
 var datosN=datos[0]
 historial.push(datosN)

var sonido=document.getElementById(datos);
var ultimo=historial.length
console.log(ultimo)
console.log(ultimo-1)

console.log(datos)
console.log(historial[ultimo-1])


if(historial[ultimo-1]===historial[ultimo-2]){
    console.log(  "me sirve");
    sonido.pause();
    sonido.currentTime = 0;
    sonido.play();
}
else if(historial[ultimo-1]===historial[ultimo-3]){
    sonido.pause();
    sonido.currentTime = 0;
    sonido.play();
}
else if(historial[ultimo-1]===historial[ultimo-4]){
    sonido.pause();
    sonido.currentTime = 0;
    sonido.play();
}
else{
    console.log("no me sirve se comparó")
    console.log(historial[ultimo-1],historial[ultimo-2])
}
sonido.play();
console.log(historial)
}


