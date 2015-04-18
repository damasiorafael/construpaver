<?php
	phpinfo();
	
	$banco = "construpav";
	$usuario = "construpav";
	$senha = "@leandro2015";
	$hostname = "https://admin.mysql.uhserver.com";
	ob_start();
	$conn = new PDO("mysql:host=".$hostname.";dbname=".$banco, "$usuario", "$senha");
	
	?>
?>