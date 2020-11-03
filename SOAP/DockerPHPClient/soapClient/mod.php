<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header("Access-Control-Allow-Headers: X-Requested-With");
	
	require 'CursoClient.php';

	$c = new CursoClient();
	
	$curso["id"] = $_POST["id"];
	$curso["lenguaje"] = $_POST["lenguaje"];
	$curso["precio"] = $_POST["precio"];
	$curso["duracion"] = $_POST["duracion"];
	echo $c->updateCurso($curso);
?>