
  var Etapa1 = document.getElementById("etapa1");
  var Etapa2 = document.getElementById("etapa2");
  var Etapa3 = document.getElementById("etapa3");

  var Avanca1 = document.getElementById("avanca1");
  var Avanca2 = document.getElementById("avanca2");
  var Volta1 = document.getElementById("volta1");
  var Volta2 = document.getElementById("volta2");

  var Progresso = document.getElementById("progresso");

  var nome,celular,cidade;
  var gripado,cirurgia;
  var alimentou,doou;

  var primeiroNome;

  function pegaValorInput(){
    nome = document.forms["etapa1"]["nome"].value;
    celular = document.forms["etapa1"]["celular"].value;
    cidade = document.forms["etapa1"]["cidade"].value;

    gripado = document.forms["etapa2"]["gripado"].value;
    cirurgia = document.forms["etapa2"]["cirurgia"].value;

    alimentou = document.forms["etapa3"]["alimentou"].value;
    doou = document.forms["etapa3"]["doou"].value;


    var fullName = nome.split(' '),
    firstName = fullName[0],
    lastName = fullName[fullName.length - 1];

    if (firstName !==""){
      let x = document.getElementById("tituloEtapa2");
      let y = document.getElementById("tituloEtapa3");

      x.innerHTML = "Olá " + firstName + " nos fale";
      y.innerHTML = "Agora " + firstName + " nos fale";
    }
  }

  Avanca1.onclick = function () {
    pegaValorInput();

    if (nome !== "" && celular !== "" && cidade !== "") {      
      Etapa1.style.left = "-450px";
      Etapa2.style.left = "45px";
      Progresso.style.width  ="240px";
    }else{ 
      swal("Ops!", "Preencha todas as informações para avançar!", "warning");      
    }
  }

  Volta1.onclick = function () {
      Etapa1.style.left = "45px";
      Etapa2.style.left = "450px";
      Progresso.style.width  ="120px";
  }

  Avanca2.onclick = function () {
    pegaValorInput();

    if (gripado !== "" && cirurgia !=="") {
      Etapa2.style.left = "-450px";
      Etapa3.style.left = "45px";
      Progresso.style.width  ="360px";
    }else{
      swal("Atenção!", "Responda todas as perguntas para avançar.", "warning");      
    }
  }

  Volta2.onclick = function () {
      Etapa2.style.left = "45px";
      Etapa3.style.left = "450px";
      Progresso.style.width  ="240px";
  }


  document.getElementById('celular').addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,4})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
  });