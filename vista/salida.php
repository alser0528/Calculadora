		<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="../vista/style/style.css">
    <script src="../vista/JS/main.js" language="javascript" type="text/javascript"></script>
<script>
        texto="<?php
         echo $calculadora->resultObject->value; ?>";	
</script>
</head>
<body>
  <h1>Calculadora</h1>
   <form method="post" action="../controlador/calculadora.php">
	  <div class='contenedorBotones'> <p id="historial" class="historial">Historial<br><?php $data = file_get_contents("../datos/calculadora");
                            $saveCalcul = unserialize($data, ['allowed_classes' => true]);	
		                   if(isset($saveCalcul)){
                            foreach( $saveCalcul as $calcul){
                               echo $calcul->stringCal.' = '.$calcul->getResult().'<br>'; 
                            }}
                            ?></p>
	   <label for='historial'>Guardar historial</label>
	  <label for='historial'>Si</label> <input type="radio" name="historial" value="Si" checked >
	   <label for='historial'>No</label><input type="radio" name="historial" value="No" required ></div>
	   <div><p class='pantalla' id="visual"><?php echo $calculadora->getResult(); ?></p><br>
	   <div class='filaBotones' >
	   <input type="button" value="7" onclick="anadirValue(this)">
	    <input type="button" value="8" onclick="anadirValue(this)">
	    <input type="button" value="9" onclick="anadirValue(this)">
	    <input type="button" value="+" onclick="anadirValue(this)">
	    <input type="button" value="AC" onclick="removeValues()"></div>
	     <div class='filaBotones'><input type="button" value="6" onclick="anadirValue(this)">
	    <input type="button" value="5" onclick="anadirValue(this)">
	    <input type="button" value="4" onclick="anadirValue(this)">
	    <input type="button" value="-" onclick="anadirValue(this)">
	    <input type="button" value="C" onclick="removeValue()"></div>
	     <div class='filaBotones'><input type="button" value="3" onclick="anadirValue(this)"> 
	    <input type="button" value="2" onclick="anadirValue(this)">
	    <input type="button" value="1" onclick="anadirValue(this)">
	    <input type="button" value="x" onclick="anadirValue(this)"></div>
	     <div class='filaBotones'><input type="button" value="0" onclick="anadirValue(this)"> 
	    <input type="button" value="." onclick="anadirValue(this)"> 
        <input type="submit" value="="  onclick="resultado()">
	    <input type="button" value="/" onclick="anadirValue(this)">
		</div>
	    <input type="hidden" id="secuencia" name="Resultado">
		  </div>
	</form>
	</body>
</html>
