<?php 
if(!isset($_POST['palabra'])) exit('No se recibió el valor a buscar');
 
function buscarIglesia()
{
	$palabra= $_POST['palabra'];
	$palabraux=''.$palabra;
	$data = file_get_contents("../json/infoIglesias.json");
	$iglesias = json_decode($data, true);
	$aciertos='';
	$estilo="";
	foreach ($iglesias as $iglesia) 
	{

		$b= strpos($iglesia["Nombre"],$palabraux);
		$nombreIglesia=$iglesia['Nombre'];
		$ubicacionIglesia=$iglesia['Ubicacion'];
		$imgIglesia=$iglesia['Imagen'];
		if($b === false)
		{
			//echo "La cadena '$palabra' no fue encontrada en la cadena '$p'"."<br>";
			//$estilo='';
		}
		else
		{
			//echo "La cadena '$palabra' fue encontrada en la cadena '$p'"."<br>";
			//$aciertos.=$nombreIglesia;
			$estilo.="<div class='col-sm-6 cardp'>";
			$estilo.="<div class='card' style='background-image: url(".$imgIglesia.");'>";
			$estilo.="<div class='card-block'>";
			$estilo.="<h3 class='card-title'>".$nombreIglesia."</h3>";
			$estilo.="<p class='card-text'>".$ubicacionIglesia."</p>";
			$estilo.="<a href='#' class='btn btn-primary'>Visitar</a>";
			$estilo.="</div>";
			$estilo.="</div>";
			$estilo.="</div>";   		
		}
	}
	//....
    echo $estilo;

    //----------------------------------------------
    
    
}

buscarIglesia();
buscarIglesia();

function buscadorPalabra()
{
	$mystring = 'abc';
	$findme   = 'a';
	$pos = strpos($mystring, $findme);

	// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
	// porque la posición de 'a' está en el 1° (primer) caracter.
	if ($pos === false) {
	    echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
	} else {
	    echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
	    echo " y existe en la posición $pos";
	}
}
//buscadorPalabra();