<?php 
if(!isset($_POST['palabra'])) exit('No se recibió el valor a buscar');
 
function buscarIglesia()
{
	$palabra= $_POST['palabra'];
	$data = file_get_contents("../json/infoIglesias.json");
	$iglesias = json_decode($data, true);
	$estilo="";

	foreach ($iglesias as $iglesia) 
	{
		if(!empty($palabra))
		{
			$b= strpos($iglesia["Nombre"],$palabra);
			if($b !== false )
			{
				$estilo.=disenoParaIglesia($iglesia['Nombre'],$iglesia['Ubicacion'],$iglesia['Imagen'],$iglesia['id']);
			}
		}
		else
		{
			$estilo.=disenoParaIglesia($iglesia['Nombre'],$iglesia['Ubicacion'],$iglesia['Imagen'],$iglesia['id']);
		}
	}

    echo $estilo;
}

function disenoParaIglesia($nombreIglesia,$ubicacionIglesia,$imgIglesia,$id)
{
	$estilo='';
	$estilo.="<div class='col-sm-6 cardp'>";
	$estilo.="<div class='card' style='background-image: url(".$imgIglesia.");'>";
	$estilo.="<div class='card-block'>";
	$estilo.="<h3 class='card-title'>".$nombreIglesia."</h3>";
	$estilo.="<p class='card-text'>".$ubicacionIglesia."</p>";
	$estilo.="<a href='#' class='btn btn-secondary btn-sm' data-toggle='modal' data-target='#".$id."'>Visitar</a>";	
	$estilo.="</div>";
	$estilo.="</div>";
	$estilo.="</div>";

	return $estilo;   

	//data-toggle="modal" data-target="#exampleModalLong"
}

buscarIglesia();

//$estilo.="<a href='#' class='btn btn-primary '>Visitar</a>";
//$estilo.="<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalLong'>Visitar</button>"