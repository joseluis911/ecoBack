
<?php

class ControladorAlerta{


	static public function ctrMostrarAlerta(){

		$tabla = "alertas";

		$respuesta = ModeloAlerta::mdlMostrarAlerta($tabla);

		return $respuesta;
	}
}