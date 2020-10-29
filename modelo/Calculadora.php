
<?php

class calculadora{
     private $arrayResultado;
     private $arrayCal;
     private $number="";
     private $resultado;
     private $arrayText;
     public $stringCal;
	 private $resultString;
	 public $resultObject;
	  
	
public function __construct($entrada){
	    $this->arrayResultado=str_split($entrada);
}

public function createObjectArray(){
	for($i=0;$i<count($this->arrayResultado);$i++){
		
		if((strpos($this->arrayResultado[$i],'0')!==false)||(strpos($this->arrayResultado[$i],'1')!==false)||(strpos($this->arrayResultado[$i],'2')!==false)||(strpos($this->arrayResultado[$i],'3')!==false)||(strpos($this->arrayResultado[$i],'4')!==false)||(strpos($this->arrayResultado[$i],'5')!==false)||(strpos($this->arrayResultado[$i],'6')!==false)||(strpos($this->arrayResultado[$i],'7')!==false)||(strpos($this->arrayResultado[$i],'8')!==false)||(strpos($this->arrayResultado[$i],'9')!==false)||(strpos($this->arrayResultado[$i],'.')!==false)){
			
							$number.=$this->arrayResultado[$i];
							if ($i==count($this->arrayResultado)-1){
							$this->arrayCal[]=new number($number);
							$number=null;
							}
								}else{
							$this->arrayCal[]=new number($number);
							$number=null;
							$this->arrayCal[]=new operation($this->arrayResultado[$i]);
							}
	}

}
	
public function calculo(){
	foreach( $this->arrayCal as $term){
		$this->arrayText[]=$term->value;
	}
	
	$this->stringCal=implode($this->arrayText);
	$this->resulString= eval('return '.$this->stringCal.';');
    $this->resultObject=new number($this->resulString);
	
}
public function getResult(){
 return $this->resultObject->value;
}
    
public function saveCalculadora(){
$data = file_get_contents("../datos/calculadora");
$saveCalcul = unserialize($data, ['allowed_classes' => true]);	
$saveCalcul[]=$this;
$file = fopen("../datos/calculadora", "w"); // Abrir
fwrite($file,serialize($saveCalcul));
fclose($file); 

}	

public function removeFile($historial){
if($historial=='No'){
$saveCalcul=null;
$file = fopen("../datos/calculadora", "w"); // Abrir
fwrite($file,serialize($saveCalcul));
fclose($file); 	}
		
	
	}


}
class number{
 
	public $type;
	public $value;
	
	public function __construct($number){
	if(strpos($number,'.')!==false)	{
		$this->type='decimal';
		$this->value=(float)$number;
		
	}else{
		$this->type='integer';
		$this->value=(int)$number;
	
	
}
	}
}
	
class operation{
	
	public $type;
	
    public $value;
	
	public function __construct($operation){
		
	switch($operation){
		case "+": 
			$this->type="suma";
			$this->value="+";
			break;
		case "-":
			$this->type="resta";
			$this->value="-";
			break;
		case "x":
			$this->type="multiplicacion";
			$this->value="*";
			break;
		case "/":
			$this->type="division";
			$this->value="/";
			break;
		default:
			echo "operador desconocido ".$operation;
	}
		
	
			
}
}   
?>