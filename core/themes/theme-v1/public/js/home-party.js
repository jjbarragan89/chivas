var btnContinuar = $('.btn-continuar'),
    btnVolver = $('.btn-volver'),
    paso1 = $('.datos-fiesta'),
    paso2 = $('.datos-persona'),
    verRes = $('.ver-respuesta'),
    contenedorP = $('.row-pregunta'),
    contenedorR = $('.row-respuesta'),
    play = $('.play'),
    cerrar = $('.ctrl-cerrar'),
    prev = $('.ctrl-prev'),
    next = $('.ctrl-next');




//::::::::::::::Funciones para el video desde YouTube:::::::::::::

  //Cargamos de forma async

var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


//Creamos el objeto <iframe>

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player(
    'video', //ID del objeto donde se carga
      {//Parametros de la reproducción
            playerVars: {
                controls: 0,
                disablekb: 1,
                autoplay: 1,
                showinfo: 0,
                rel: 0
            },//Parametros del iframe
          height: '410',
          width: '750',
          videoId: 'RVZDaunRaK8',
          events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
    }
  });
};

var done = false;
//La API carga el video cuando está listo
function onPlayerReady(event) {
  player.mute();

  event.target.playVideo();

};

///la API llama esta funcion cuando el player cambia de estado


function onPlayerStateChange(event) {
  //Revisamos si el video terminó
  if ( event.data == YT.PlayerState.ENDED && !done )
  {
    // console.log("terminó");
    done = true;
    player.playVideo();

  };

  /*eventos cuando se pausa el video*/

  if ( player.getPlayerState() == 2 ){


  }

  /*eventos cuando corre el video*/
   if ( player.getPlayerState() == 1 ){

     done = false;

   }
};

$(document).ready(function ($) {


  /*boton play de video*/

  // $(play).on('click',function() {


  //   /*movemos los demás elementos*/

  //   $('.logo ,  .login , .titulo-incluye, .incluye, .play, .container-banner h2').addClass('animated');

  //   $('.logo ,  .login, .container-banner h2').addClass('fadeOutUp');
  //   $('.titulo-incluye, .incluye').addClass('fadeOutDown');

  //   $(this).addClass('fadeOut disabled');

  //   $('#video').removeClass('hidden');


  //   //ID del video//
  //   // player.loadVideoById("RVZDaunRaK8",0, "large");

  //   /*Play video*/
  //   player.playVideo();

  //   function playVideo() {

  //     player.playVideo();
  //   };


  // });

  if( $(window).width() <= 768  ){

      $('.video.embed-responsive.embed-responsive-16by9').html('<img src="images/header-mobile.jpg" class="img-responsive"> ');


  }

  /*mostrar/ocultar menu*/

  $('.menu-toggle').on('click', function(){
    $('body').toggleClass('open');
  });

  /*Mostrar/ocultar inputs*/

  $('.input label').on('click', function() {

    $('.input').removeClass('input-focus');
      
    $(this).parent().parent().toggleClass('input-focus');
    $(this).parent().find('input').focus();

  });

  $('.textarea label').on('click', function() {

    console.log('hola label')

    $('.textarea').removeClass('input-focus');
      
    $(this).parent().parent().toggleClass('input-focus');
    $(this).parent().find('textarea').focus();

  });

  //input activo si se lleno
  $('.input input').focusout(function() {
    $(this).parent().removeClass('input-focus');

    if ( $(this).val() != '' ){

     $(this).parent().addClass('input-focus');
      
    }

  });

  //textarea activo si se lleno
  $('.textarea textarea').focusout(function() {
    console.log('hola value')
    $(this).parent().parent().removeClass('input-focus');

    if ( $(this).val() != '' ){

     $(this).parent().parent().addClass('input-focus');
      
    }

  });


  /*que incluye la fiesta*/

  $('.incluye-item').on('click', function() {

    $('.incluye-item').removeClass('incluye-active');
    $(this).addClass('incluye-active');


    var item = $(this).attr('data-item');
    var text =   $('.incluye-text p');

    $('.incluye-text').addClass('animated fadeIn');
    $('.incluye-text').removeClass('hidden');


    $(text).addClass('hidden');

    $('#'+item).removeClass('hidden');


  });

  /* Cambio de Fieldset*/

  btnContinuar.on('click', function () {
     
    paso1.addClass('u-ocultar-field');
    paso2.addClass('u-mostrar-field');
    // window.scrollTop(0);


  });


  btnVolver.on('click', function () {
     
    paso1.removeClass('u-ocultar-field');
    paso2.removeClass('u-mostrar-field');


  });


/*Navegador de preguntas*/

/*Mostrar cualquier pregunta*/

verRes.on('click', function () {

  var data = $(this).attr('data-pregunta');
  var respuesta = contenedorR.find('.col-lg-10').attr('data-pregunta');


      contenedorP.addClass('hidden');
      contenedorP.removeClass('animated fadeIn');
      contenedorR.removeClass('hidden animated fadeOut');

      $('#'+data).removeClass('hidden');
      $('#'+data).addClass('active animated fadeIn');


      if( $('.active').attr('id') == 0   ){

        prev.addClass('disabled');

      } 

    if( $('.active').attr('id') == contenedorP.length  ){

      next.addClass('disabled');

    } 

    console.log(contenedorP.length);

});

/*Cerrar preguntas*/

cerrar.on('click',function() {
      contenedorP.removeClass('hidden');
      contenedorP.addClass('animated fadeIn');
      contenedorR.addClass('animated fadeOut');
      contenedorR.addClass('hidden');
      contenedorR.find('.col-lg-10').addClass('hidden');
      contenedorR.find('.col-lg-10').removeClass('active animated fadeIn fadeInUp fadeInDown');
      prev.removeClass('disabled');
      next.removeClass('disabled');
});

/*pregunta anterior*/
prev.on('click', function() {

  var activo = contenedorR.find('.active');

    activo.removeClass('active animated fadeIn fadeInUp fadeInDown');

    activo.addClass('hidden');

    activo.prev().removeClass('hidden');
    activo.prev().addClass('active animated fadeInDown');
    prev.removeClass('disabled');
    next.removeClass('disabled');

    if(activo.attr('id') == 0 ){

      $(this).addClass('disabled');
    }

});


/*pregunta siguiente*/
next.on('click', function() {

  var activo = contenedorR.find('.active');

    activo.removeClass('active animated fadeIn fadeInUp fadeInDown');

    activo.addClass('hidden');
    activo.next().removeClass('hidden');
    activo.next().addClass('active animated fadeInUp');

    prev.removeClass('disabled');
    next.removeClass('disabled');

    if(activo.attr('id') == contenedorP.length  ){

     $(this).addClass('disabled');
    }


});


});


/*comportamiento tab formulario*/

$(document).keydown(function(e) {

  var input = $('.datos-fiesta .col-lg-6'),
      code = e.keyCode || e.which;

  if (code === 9 && !input.hasClass('input-focus') ) {
    console.log("aca");
      
    $(input).first().toggleClass('input-focus');
    $(input).first().find('input').focus();


  }
  else if( code === 9 && input.hasClass('input-focus')  ){


    $(document).find('.input-focus').next().toggleClass('input-focus');
    $(document).find('.input-focus').prev().removeClass('input-focus');

  }


});

/*mostrar formulario disponibilidad fecha*/
$(document).on('click', '.no-disponible', function (event) {
  event.preventDefault();

  $('#no-disponible').parent().parent().removeClass('hidden ');
  $('#no-disponible').parent().parent().addClass('flipInY');
  $('#fiesta').parent().parent().addClass('hidden flipOutY');

});

$(document).on('click', '.btn-disponible', function (event) {
  event.preventDefault();

  $('#no-disponible').parent().parent().removeClass('flipInY');
  $('#no-disponible').parent().parent().addClass('fadeOut');
  $('#fiesta').parent().parent().removeClass('hidden flipOutY');
  //$('#fiesta').parent().parent().removeClass('flipOutY');
  $('#fiesta').parent().parent().addClass('fadeIn');
  $('#no-disponible').parent().parent().addClass('hidden');

});



