<?php 
	require_once ("../modelo/Calculadora.php");

$calculadora=new calculadora($_POST["Resultado"]);
		$calculadora->createObjectArray();
		$calculadora->calculo();
	    $calculadora->saveCalculadora();
	    $calculadora->removeFile($_POST['historial']);

	require_once("../vista/salida.php");
 ?>