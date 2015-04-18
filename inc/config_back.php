<?php
@session_start();
//error_reporting(E_ALL);
error_reporting(E_ERROR);

if ($_SERVER['SERVER_NAME'] == 'server' ) {
	$con = mysql_pconnect('server','root','admin');
	$db = mysql_select_db('exemplo');
} else {
	$con = mysql_pconnect('noar','root','admin');
	$db = mysql_select_db('exemplo');
}

function protecao($string){

  // Passando a primeira letra pra Maiúsculo e o restante pra minúsculo 
  $string = strtolower($string);  	
  
  // Verificando alguns elementos que não podem ser passado por POST e nem por GET, e trocando eles por vazio dai ... 
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



function consulta_db($sql) {
	return mysql_query($sql);
}
function converte_data($data) {
	$acho =  implode(!strstr($data, '/') ? "/" : "-", array_reverse(explode(!strstr($data, '/') ? "-" : "/", $data)));
	return str_replace('2007','2007',$acho);
}
function diasemana($data) {
	$ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);

	$diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano) );

	switch($diasemana) {
		case"0": $diasemana = "Domingo";       break;
		case"1": $diasemana = "Segunda-Feira"; break;
		case"2": $diasemana = "Terça-Feira";   break;
		case"3": $diasemana = "Quarta-Feira";  break;
		case"4": $diasemana = "Quinta-Feira";  break;
		case"5": $diasemana = "Sexta-Feira";   break;
		case"6": $diasemana = "Sábado";        break;
	}
	echo "$diasemana";
}
?>