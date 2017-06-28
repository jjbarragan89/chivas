jQuery(document).ready(function(){
	jQuery("#signIn").click(function(){
		var ajaxData = new Object();
		ajaxData.url = "modules/login.php";
		ajaxData.variables = {
			"username" : jQuery("#username").val(),
			"password" : jQuery("#password").val()
		};
		var result = ajaxGenerico(ajaxData);
		if(result.login == true){
			location.href ="home";
		} else {
			alert("los datos ingresados no estan registrados en la base de datos :(");
		}
	});
});