<?php
@session_start();
//error_reporting(E_ALL);
error_reporting(E_ERROR);

$_SESSION["num_session"] = session_id();
$num_session = sha1($_SESSION["num_session"]);

function protecao($string){

  // Passando a primeira letra pra MaiÃºsculo e o restante pra minÃºsculo 
  //$string = strtolower($string);  	
  
  // Verificando alguns elementos que nÃ£o podem ser passado por POST e nem por GET, e trocando eles por vazio dai ... 
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

function tira_aspas($string){
	$string = str_replace("\"", "", $string);
	return $string;
}

function protecao2($string){
  
  // Verificando alguns elementos que nÃ£o podem ser passado por POST e nem por GET, e trocando eles por vazio dai ... 
  $string = str_replace("select", "", $string);
  $string = str_replace("delete", "", $string);
  $string = str_replace("create", "", $string);
  $string = str_replace("drop", "", $string);
  $string = str_replace("update", "", $string);
  $string = str_replace("drop table", "", $string);
  $string = str_replace("show table", "", $string);
  $string = str_replace("applet", "", $string);
  $string = str_replace("object", "", $string);
  $string = strip_tags($string);
 
  return $string;
}

function consulta_db($sql) {
	return mysql_query($sql);
}

function insere_db($campos,$valores,$tabela) { //inserir dados no banco
	$inicio="INSERT INTO $tabela(";
	$meio=") VALUES (";
	$fim=")";
	$valor = sizeof($campos);
	$strc="";
	for($i=0;$i <= ($valor-1);$i++){
		$strc.="$campos[$i]";
		if($i != ($valor-1)){
		  $strc.=",";
		}
	 }
	$strv="";
	for($k=0;$k <= ($valor-1);$k++){
		$strv.="\"$valores[$k]\"";
		if($k != ($valor-1)){
		  $strv.=",";
		}
	 }
	$insere="$inicio$strc$meio$strv$fim";
	//echo $insere;
	$foi = consulta_db($insere);
	return $foi;
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

function limita_caracter($string, $qtde){
	$pontos = "(...)";
	$string2 = substr_replace($string, $pontos, $qtde, -1);
	return $string2;
}

function tira_ponto_virgula($string){
	$string=explode(";;",$string);
	return $string[0].$string[2];
}

?>