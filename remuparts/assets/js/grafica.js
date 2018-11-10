$(document).ready(function(){


$.ajax({
    url: '../../data/2010-2014.csv',
    dataType: "text",
    contentType: "charset=utf-8",
  }).done(grafica);


function grafica(data){

  var year = document.getElementById('years');

  var datos = data.split(/\r?\n|\r/);      
  // console.log(datos);


if(sessionStorage.getItem('uno') == null && sessionStorage.getItem('dos') == null && sessionStorage.getItem('fecha') == null){

  sessionStorage.setItem('uno',0);
  sessionStorage.setItem('dos',1);
  sessionStorage.setItem('fecha',2010);
}
setInterval(function(){
  document.getElementById("fecha").innerHTML = "Año "+sessionStorage.getItem('fecha');
},1000);


console.log(sessionStorage.getItem('fecha'));
  var value1 = sessionStorage.getItem('uno');
  var value2 = sessionStorage.getItem('dos');


  // if(value1 != "" && value2 != ""){
  //   alert(value1+value2)
  // }
   // sessionStorage.setItem('uno',0);
   // sessionStorage.setItem('dos',1);

  var linea = datos[value1].split(';');
  var linea1 = datos[value2].split(';');


document.getElementById("cambio1").addEventListener("click", function(event){
    event.preventDefault();

    if(value1 != "" && value2 != "") {
         sessionStorage.setItem('uno',0);
         sessionStorage.setItem('dos',1);
         sessionStorage.setItem('fecha',2010);
         console.log('2010');
         console.log(value1); 
         console.log(value2); 

      }
        mostrar();
         location.reload();
         
});

document.getElementById("cambio2").addEventListener("click", function(event){
    event.preventDefault();

       if(value1 != "" && value2 != "") {
         sessionStorage.setItem('uno',2);
         sessionStorage.setItem('dos',3);
         sessionStorage.setItem('fecha',2011);
         console.log('2011');
         console.log(value1); 
         console.log(value2); 
        }
        mostrar();
        location.reload();
});

document.getElementById("cambio3").addEventListener("click", function(event){
    event.preventDefault();

       if(value1 != "" && value2 != "") {
         sessionStorage.setItem('uno',4);
         sessionStorage.setItem('dos',5);
         sessionStorage.setItem('fecha',2012);
         console.log('2012'); 
         console.log(value1); 
         console.log(value2); 
        }
        mostrar();
        location.reload();
});

document.getElementById("cambio4").addEventListener("click", function(event){
    event.preventDefault();

    if(value1 != "" && value2 != "") {
         sessionStorage.setItem('uno',6);
         sessionStorage.setItem('dos',7);
         sessionStorage.setItem('fecha',2013);
         console.log('2013');
         console.log(value1); 
         console.log(value2); 
    }
        mostrar(); 
        location.reload();
});

document.getElementById("cambio5").addEventListener("click", function(event){
    event.preventDefault();

    if(value1 != "" && value2 != "") {
         sessionStorage.setItem('uno',8);
         sessionStorage.setItem('dos',9);
         sessionStorage.setItem('fecha',2014);
         console.log('2014');
         console.log(value1); 
         console.log(value2); 
    }
        mostrar();
        location.reload();
});


 console.log(linea.length);
 console.log(linea1.length);


    var config = {

      type: 'line',
      data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
          label: 'Venta',
          backgroundColor: 'green',
          borderColor: 'green',
          data:linea1,
          fill: false,
        }, {
          label: 'Compra',
          fill: false,
          backgroundColor: window.chartColors.blue,
          borderColor: window.chartColors.blue,
          data:linea,
        }]
      },
      options: {
        responsive: true,
        title: {
          display: true,
          text: 'Cotizacion del dolar'
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Meses'
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Niveles'
            }
          }]
        }
      }
    };



    mostrar();


    function mostrar(){
        $.ajax({
          type:"ajax",
        success: function(result){
        
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);
            var colorNames = Object.keys(window.chartColors);
          
        }
      });
    }


 }//cerrando la funcion grafica


});

