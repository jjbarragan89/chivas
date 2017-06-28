$(document).on('ready', function () {

	//Mostrar input de cupon//
	$('.btn-coupon').click(function() {
		self = $(this)
		$(this).toggleClass('btn-active');
		setTimeout(function() {
			self.parent().find('.input').toggleClass('coupon-active');
		}, 500);


	});

	/*Btn para validar cupón*/
	$('a.btn-validar')
		.click(function (e) {
			e.preventDefault();
		});
	
	/*validacion de formulario de fiesta*/
	$("#fiesta").validate({

	       /* debug: true,*/

	      /*Contenedor y clase donde se pinta el error*/
	      errorElement: "div",
	      errorClass: "alert-danger",

	      /*Campos para validar en form para pedir fiesta*/

	    rules: {
	           ocasion:       {required: true}, 
	           direccion:       {required: true},
	           ciudad:       {required: true},
	           lugar:       {required: true},
	           amigos:       {required: true},
	           fecha:       {required: true, date: true},
	           nombres:       {required: true, accept: "[a-zA-Z]+" },
	           apellidos:       {required: true, accept: "[a-zA-Z]+" },
	           documento:          {required: true, digits: true},  
	           fecha:          {required: true, date: true},  
	           nacimento:          {required: true, date: true},  
	           email:       {required: true, email: true},  
	           telefono:          {required: true,  digits: true},  
	           genero:          {required: true},  
	           politica:        {required: true},
	           terminos:        {required: true} 
	           },

	    /*Mensajes en caso de dar error para cada input*/

	    messages: {
	      ocasion:      {required: "debes ingresar una ocasión"},
	      direccion:      {required: "debes ingresar la dirección del lugar"},
	      ciudad:      {required: "debes ingresar la ciudad"},
	      lugar:      {required: "debes ingresar el lugar"},
	      amigos:      {required: "debes indicar para cuantos amigos es la fiesta"},
	      fecha:      {required: "debes indicar el día de la fiesta"},
	      nombres:      {required: "debes ingresar un nombre", accept: "solo ingresa texto"},
	      apellidos:      {required: "debes ingresar tus apellidos", accept: "solo ingresa texto"},
	      documento:  {required: "Indíca un númerno de documento", digits: "solo se aceptan números" },
	      fecha:  {required: "Indíca una fecha", date: "no es un formato de fecha válido" },
	      nacimento:  {required: "Indíca una fecha", date: "no es un formato de fecha válido" },
	      email:      {required: "debes ingresar un email", email: "Ingresa un email válido"},
	      telefono:      {required: "Indíca un número", digits: "Ingresa solo números" },
	      genero:      {required: "Indíca un género"},
	      politica:       {required: "Debes aceptar el aviso de privacidad"},
	      terminos:         {required: "Debes aceptar los términos y condiciones"}

	           },

	    errorPlacement: function (error, element) {

	      if( element.attr('name') == 'ciudad' || element.attr('name') == 'amigos' || element.attr('name') == 'genero' || element.attr('name') == 'lugar' ){

	        error.insertAfter(element);

	      }else{

	        error.insertAfter(element.parent());
	      }

	    },

	    highlight: function (element, errorClass, validClass) {

	      $(element).parent().parent().parent().find('.col-lg-6').addClass('u-error');
	    },

	    unhighlight: function (element, errorClass, validaClass) {
	      $(element).parent().parent().parent().find('.col-lg-6').removeClass('u-error');
	      // body...
	    }

	});
});