<?php 

require_once "../modelos/alertas.modelo.php";

class AjaxAlerta{


	public $estado;
	public $valor;
	public $texto;
	public $encabezado;


	/*=============================================
		ACTUALIZAR ALERTA 
	=============================================*/

	public function ajaxActivarAlerta(){

		$tabla = "alertas";

		$item1 = "estado";
		$valor1 = $this->estado;

		$item2 = "visible";

		if ($valor1 == 0){
			$valor2 = "none";
		}else{
			$valor2 = "block";
		}
			

		$respuesta = ModeloAlerta::mdlActualizarAlerta($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}

	 public function ajaxTipoAlerta(){

 	$tabla = "alertas";

 	$item = "tipo";
 	$valor = $this->valor;
 	$item2 = "icono";

 	if ($valor == "info") {
 		$valor2 = "info";

 	}else if ($valor == "success"){
 		$valor2 = "check";
 	}else if ($valor == "danger"){
 		$valor2 = "ban";
 	}else if ($valor == "warning"){
 		$valor2 = "warning";
 	}

	 $respuesta = ModeloAlerta::mdlTipoAlerta($tabla, $item, $valor, $item2, $valor2);

	 	echo $respuesta;

	 }

	 public function ajaxTextoAlerta(){
	 	$tabla = "alertas";
	 	$item = "encabezado";
	 	$valor = $this->encabezado;
	 	$item2 = "texto";
	 	$valor2 = $this->texto;
	 	
	 	 $respuesta = ModeloAlerta::mdlTipoAlerta($tabla, $item, $valor, $item2, $valor2);

	 	echo $respuesta;
	 }


}

/*=============================================
ACTUALIZAR ALERTA 
=============================================*/


if (isset($_POST["estado"])) {
	$activar = new AjaxAlerta();
	$activar -> estado = $_POST["estado"];
	$activar -> ajaxActivarAlerta();
}


/*=============================================
MODIFICAR ALERTA INFO
=============================================*/
if (isset($_POST["info"])) {
	$tipo = new AjaxAlerta();
	$tipo -> valor = $_POST["info"];
	$tipo -> ajaxTipoAlerta();
}

/*=============================================
MODIFICAR ALERTA SUCCESS
=============================================*/
if (isset($_POST["success"])) {
	$tipo = new AjaxAlerta();
	$tipo -> valor = $_POST["success"];
	$tipo -> ajaxTipoAlerta();
}
/*=============================================
MODIFICAR ALERTA WARNING
=============================================*/
if (isset($_POST["warning"])) {
	$tipo = new AjaxAlerta();
	$tipo -> valor = $_POST["warning"];
	$tipo -> ajaxTipoAlerta();
}
/*=============================================
MODIFICAR ALERTA DANGER
=============================================*/
if (isset($_POST["danger"])) {
	$tipo = new AjaxAlerta();
	$tipo -> valor = $_POST["danger"];
	$tipo -> ajaxTipoAlerta();
}
/*=============================================
MODIFICAR TEXTO Y ENCABEZADO ALERTAS
=============================================*/
if (isset($_POST["encabezado"])) {
	$tipo = new AjaxAlerta();
	$tipo -> encabezado = $_POST["encabezado"];
	$tipo -> texto = $_POST["texto"];
	$tipo -> ajaxTextoAlerta();
}
