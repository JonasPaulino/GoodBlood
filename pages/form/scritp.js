var Etapa1 = document.getElementById("etapa1");
var Etapa2 = document.getElementById("etapa2");
var Etapa3 = document.getElementById("etapa3");

var Avanca1 = document.getElementById("avanca1");
var Avanca2 = document.getElementById("avanca2");
var Volta1 = document.getElementById("volta1");
var Volta2 = document.getElementById("volta2");

var Progresso = document.getElementById("progresso");

Avanca1.onclick = function () {
  Etapa1.style.left = "-450px";
  Etapa2.style.left = "45px";
  Progresso.style.width  ="240px";
}

Volta1.onclick = function () {
  Etapa1.style.left = "45px";
  Etapa2.style.left = "450px";
  Progresso.style.width  ="120px";
}

Avanca2.onclick = function () {
  Etapa2.style.left = "-450px";
  Etapa3.style.left = "45px";
  Progresso.style.width  ="360px";
}

Volta2.onclick = function () {
  Etapa2.style.left = "45px";
  Etapa3.style.left = "450px";
  Progresso.style.width  ="240px";
}