 
function anadirValue(objButton){
	texto+=objButton.value;
	document.getElementById("visual").innerHTML=texto;
	
}
function resultado(){
	secuencia=document.getElementById("secuencia");
    texto=texto.replace("PI",Math.PI)
	secuencia.value=texto;
}
function removeValues(){
    texto="";
    document.getElementById("visual").innerHTML=texto;
}
function removeValue(){
    texto=texto.slice(0,texto.length-1);
    document.getElementById("visual").innerHTML=texto;
}
function anadirValuePi(obj){
    texto+=objButton.value;
	document.getElementById("visual").innerHTML=texto;
    
}
