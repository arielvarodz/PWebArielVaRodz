var tiempo = setInterval(myTimer, 1500);
var cartas = [];
var contadorIteracion = 0;

function inArray(value, array) {
  return array.indexOf(value) > -1;
}

(function() {
  // Llenamos el arreglo de cartas con cartas no repetidas
  var carta = parseInt(Math.random()*10);
  for (var i = 0; i < 10; i++) {
    while(inArray(carta, cartas)){
      carta = parseInt(Math.random()*10);
    }
    cartas[i] = carta;
  }
})();

function myTimer() {
    var carta = cartas.pop();
    $('#foto').attr('src',"./img/carta" + carta + ".png");

    contadorIteracion ++;
    if(contadorIteracion == 10){
      clearInterval(tiempo);
    }
}

$(document).ready(function() {
    var contador = 0;
    $( "#0").click(function() {
      frijolito(0);
    });

    $( "#1").click(function() {
      frijolito(1);
    });

    $( "#2").click(function() {
      frijolito(2);
    });

      $( "#3").click(function() {
        frijolito(3);
      });

      $( "#4").click(function() {
        frijolito(4);
      });

      $( "#5").click(function() {
        frijolito(5);
      });

      $( "#6").click(function() {
        frijolito(6);
      });

      $( "#7").click(function() {
        frijolito(7);
      });

      $( "#8").click(function() {
        frijolito(8);
      });
    function frijolito(carta){
      if(!inArray(carta, cartas)){
        $('#frijol_' + carta).css('visibility', 'visible');
        contador ++;
        if(contador == 9)
          $('#myModal').modal('show')
      }
    }

});
