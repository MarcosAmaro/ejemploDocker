<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header("Access-Control-Allow-Headers: X-Requested-With");
	
	require 'CursoClient.php';

	$c = new CursoClient();
	//echo $_POST['id'];
	echo $c->deleteCurso($_POST['id']);
?>