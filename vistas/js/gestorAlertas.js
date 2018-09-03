/*=============================================
ACTIVAR ALERTA
=============================================*/

$(".btnActivar").on("click", function(){

	var estadoAlerta = $(this).attr("estadoAlerta");

	var datos = new FormData();

	datos.append("estado", estadoAlerta);

	$.ajax({
		url: "ajax/alertas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			
		}
	})

	if(estadoAlerta == 0){

  		$(this).removeClass('btn-success');
  		$(this).addClass('btn-danger');
  		$(this).html('Desactivado');
  		$(this).attr('estadoAlerta',1);

  	}else{

  		$(this).addClass('btn-success');
  		$(this).removeClass('btn-danger');
  		$(this).html('Activado');
  		$(this).attr('estadoAlerta',0);

  	}

});

/*=============================================
MODIFICAR ALERTA INFO
=============================================*/

$(".info").on("click", function(){

	var info = $(".info").val();

	


	datos = new FormData();

	datos.append("info", info);

	$.ajax({

		url: "ajax/alertas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			
		}
	});
	
});

/*=============================================
MODIFICAR ALERTA SUCCESS
=============================================*/

$(".success").on("click", function(){

	var success = $(".success").val();

	


	datos = new FormData();

	datos.append("success", success);

	$.ajax({

		url: "ajax/alertas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			
		}
	});
	
});

/*=============================================
MODIFICAR ALERTA WARNING
=============================================*/

$(".warning").on("click", function(){

	var warning = $(".warning").val();

	


	datos = new FormData();

	datos.append("warning", warning);

	$.ajax({

		url: "ajax/alertas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			
		}
	});
	
});

/*=============================================
MODIFICAR ALERTA DANGER
=============================================*/

$(".danger").on("click", function(){

	var danger = $(".danger").val();

	

	

	datos = new FormData();

	datos.append("danger", danger);

	$.ajax({

		url: "ajax/alertas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			
		}
	});
	
});

$(".generarAlerta").on("click", function(){

	var encabezado = $(".encabezado").val();
	var texto = $(".texto").val();

	datos = new FormData();

	datos.append("encabezado", encabezado);
	datos.append("texto", texto);

	if(encabezado == ""){
		$(".ajaxAlertas").html(
			'<div class="callout callout-warning">'
 		+'<h4>Atención!</h4>'
		+'<p>No debes dejar el encabezado vacío</p>'
		+' </div>');

	}else if(texto == ""){
		$(".ajaxAlertas").html(
			'<div class="callout callout-warning">'
 		+'<h4>Atención!</h4>'
		+'<p>No debes dejar el texto vacío</p>'
		+' </div>');
	}else{

		$.ajax({

		url: "ajax/alertas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

		

 	 						swal({
				  type: "success",
				  title: "La alerta ha sido modificada correctamente",
				  showConfirmButton: true,
				  confirmButtonText: "Cerrar"
				  }).then((result) => {
					if (result.value) {

					window.location = "alertas";

					}
				})

 	 			




		
			
		}
	});


	}
})