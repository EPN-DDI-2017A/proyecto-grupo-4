<?php 
if(!isset($_POST['palabra'])) exit('No se recibió el valor a buscar');

function buscarIglesia()
{
	$palabra= $_POST['palabra'];
    echo $palabra;
}

buscarIglesia();