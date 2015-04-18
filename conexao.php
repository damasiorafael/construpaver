<?php
	
	$banco = "construpav";
	$usuario = "construpav";
	$senha = "@leandro2015";
	$hostname = "https://admin.mysql.uhserver.com";
	
	try{
    	$conn = new PDO('mysql:host=localhost;dbname=construpav', $usuario, $senha);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}

?>