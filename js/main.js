var hola = ["Hola!|","Hola|","Hol|","Ho|","H|","Ho|","Hol|","Hola|"];
var z = 0;
document.getElementById("holah4").innerHTML = "new";



var func = setInterval(holafunc,500);
  
function holafunc(){
  if(z>=hola.length)
    z = 0;
  holah4.innerHTML = hola[z++];
};