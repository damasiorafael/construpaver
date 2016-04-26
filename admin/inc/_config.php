<?php
//header("Content-Type: text/html; charset=utf8",true);
session_start();
//error_reporting(E_ALL);
error_reporting(E_ERROR);

/*$host 	= "dbmy0044.whservidor.com";
https://admin.mysql.uhserver.com/
$user	= "construpav";
$pass	= "@construp";
$bd		= "construpav";*/

/*if($_SERVER['SERVER_NAME'] == 'localhost'){
	$banco = "construpav";
	$usuario = "root";
	$senha = "";
	$hostname = "localhost";
} else {
	$banco = "construpav";
	$usuario = "construpav";
	$senha = "@leandro2015";
	$hostname = "54.207.7.66";
}*/
/*
if($_SERVER['SERVER_NAME'] == 'localhost'){
  $banco = "construpav";
  $usuario = "root";
  $senha = "";
  $hostname = "localhost";
} else {
  $banco = "construpaver";
  $usuario = "pgsskroton";
  $senha = "PgssKroton.2015";
  //$hostname = "mysql.weblink.com.br";
  $hostname = "pgsskroton.cfcpvwksy2ah.sa-east-1.rds.amazonaws.com";
}

$con = mysql_connect($hostname,$usuario,$senha);
$db = mysql_select_db($banco);*/

if($_SERVER['SERVER_NAME'] == "localhost"){
  $host   = "localhost";
  $user = "root";
  $pass = "";
  $bd   = "construpaver";
} else {
  /*
  $host   = "localhost";
  $user = "pgsskroton";
  $pass = "PgssKroton@2015";
  $bd   = "psskroton";
  */
  $host   = "pgsskroton.cfcpvwksy2ah.sa-east-1.rds.amazonaws.com";
  $user = "pgsskroton";
  $pass = "PgssKroton.2015";
  $bd   = "construpaver";
}

$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($bd);

function protecao($string){

  // Passando a primeira letra pra Maiúsculo e o restante pra minúsculo 
  //$string = strtolower($string);
  
  // Verificando alguns elementos que não podem ser passado por POST e nem por GET, e trocando eles por vazio... 
  $string = str_replace("select", "", $string);
  $string = str_replace("delete", "", $string);
  $string = str_replace("create", "", $string);
  $string = str_replace("drop", "", $string);
  $string = str_replace("update", "", $string);
  $string = str_replace("drop table", "", $string);
  $string = str_replace("show table", "", $string);
  $string = str_replace("applet", "", $string);
  $string = str_replace("object", "", $string);
  $string = str_replace("'", "", $string);
  $string = str_replace("#", "", $string);
  $string = str_replace("=", "", $string);
  $string = str_replace("--", "", $string);
  $string = str_replace("-", "", $string);
  $string = str_replace(";", "", $string);
  $string = str_replace("*", "", $string);
  $string = strip_tags($string);
 
  return $string;
}

function consulta_db($sql){
	return mysql_query($sql);
}

function insert_db($sql){
	return mysql_query($sql);
}

function deleta_db($sql){
	return mysql_query($sql);
}

?>