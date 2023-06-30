function leiaMais(){
    var pontos=document.getElementById("pontos");
    var maisTexto=document.getElementById("mais");
    var btnLeiaMais=document.getElementById("btnLeiaMais");


if(pontos.style.display === "none"){
    pontos.style.display="inline";
    maisTexto.style.display="none";
    btnLeiaMais.innerHTML="Leia Mais";
}else{
    pontos.style.display="none";
    maisTexto.style.display="inline";
    btnLeiaMais.innerHTML="Leia Menos";
 }
}

const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
    document.body.classList.toggle('dark')
})

/*efeito escrevendo*/

var string = "A"; /* type your text here */
var array = string.split("");
var timer;

function frameLooper () {
  if (array.length > 0) {
    document.getElementById("text").innerHTML += array.shift();
  } else {
    clearTimeout(timer);
      }
  loopTimer = setTimeout('frameLooper()',90); /* change 70 for speed */

}
frameLooper();