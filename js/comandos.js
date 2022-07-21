
var sintesis=speechSynthesis;
var voices = sintesis.getVoices();
var retro=document.getElementById('reconocido');
var borrarRetro=document.getElementById('limpiarP');
borrarRetro.addEventListener("click",function(){retro.innerHTML=''});

var mensaje=new SpeechSynthesisUtterance();
if (annyang) {
  var comandos = {
    
    hola : function(){
      decir("Hola, escoge un tema para aprender música")
    } ,
      
      

    

    apagar: modificarMicro,
    'apagar audio': modificarAudio,
    'encender audio': modificarAudio,
    pausar: pausarVideo,
	     adelante: function() {
      window.history.go(+1);
    },
        bajar: function() {
          //window.scrollBy( {0, 500,behavior: "smooth" });
          window.scrollBy({top: 200,left: 0,behaviour: 'smooth' })
    },
        subir: function() {
          document.getElementById('scrollUp').click();
          //window.scrollBy( 0, -200 );
    },
        atrás: function() {
      window.history.back();
    },
             
        'escribir *tag':function(tag){
      $("#mitexto").val(tag);
      $("#mitexto2").val(tag);
    },
    "mi nombre es *nombre y tengo *anios años": (nombre, anios) => {
            console.log(` ${nombre} tienes ${anios} :)`);

        },
        //Comandos para navegación en el menú
        acordes: function() {
          window.location="/music/acordes/";
        },
        nosotros: function() {
          window.location="/music/nosotros/";
        },
        preguntas: function() {
          window.location="/music/preguntas/";
        },
        comandos: function() {
          window.location="/music/comandos/";
        },
        historial: function() {
          window.location="/music/historial/";
        },
        inicio: function() {
          window.location="/index.php";
        },
        demo: function() {
          if(window.location.pathname=="/music/cancion/index.php"){
            document.getElementById('botondemo').click();

          }
        },
        continuar: function() {
          
            document.getElementById('botoncontinuar').click();

          
        },
        Aprender: function() {
          window.location="/music/aprender/index.php";
        },
        desafio: function() {
          window.location="/music/desafio/index.php";
        },
        ritmo: function() {

          if(window.location.pathname=="/music/cancion/index.php"){
            document.getElementById('botonritmo').click();

          }

          
        },        
        armonía: function() {
          if(window.location.pathname=="/music/cancion/index.php"){
            document.getElementById('botonarmo').click();

          }
        },
        cerrar: function() {
          if(window.location.pathname=="/music/cancion/index.php"){
            document.querySelectorAll('.close-modall')[0].click();
            document.querySelectorAll('.close-modall')[1].click();

          }
        },
        limpiar: function() {
          borrarRetro.click();

          }
       

  };
  annyang.addCommands(comandos);
  annyang.setLanguage("es");
  annyang.addCallback("result", frases => {
      console.log("Reconocido: ", frases);
      retro.innerHTML=frases;


  });
  annyang.start({autoRestart:true});
}

var video = document.getElementById("mivideo");
function reproducirVideo() {
  video.play();
}
function pausarVideo() {
  video.pause();
}
var micro=document.getElementById('microfono');
var audioModi=document.getElementById('audioModi');
micro.addEventListener("click", modificarMicro);
audioModi.addEventListener("click", modificarAudio);

function modificarMicro(){
    if(micro.className === 'fal fa-microphone-alt'){
      annyang.pause();
      micro.className = 'fal fa-microphone-slash';
  } else {
      annyang.resume();
      micro.className = 'fal fa-microphone-alt';
  }
}
function modificarAudio(){
  if(audioModi.className === 'fal fa-volume-up'){
    sintesis.cancel();
    audioModi.className = 'fal fa-volume-mute';
} else {

  audioModi.className = 'fal fa-volume-up';
}
}


function decir(e){

      if(audioModi.className === 'fal fa-volume-up'){
        annyang.pause();
       
      sintesis.cancel();
      sintesis.resume();
      mensaje.volume = 3;
      mensaje.rate = 1.4;
      mensaje.text = e;
      mensaje.onstart =annyang.pause(); {
        
    };
      mensaje.onend = function(event) {
        console.log('se dijo la frase con duración ' + event.elapsedTime + ' milliseconds.');
        annyang.resume();

      }
      sintesis.speak(mensaje);
      
    
      
    }
}

