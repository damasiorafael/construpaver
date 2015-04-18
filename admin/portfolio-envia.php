<?php
	include("inc/config.php");
	$acao 	= protecao(utf8_decode($_REQUEST['acao']));
	$id		= $_REQUEST['id'];
	
	$tit_imagem = protecao(utf8_decode($_POST['tit_imagem']));
	$tx_imagem 	= protecao(utf8_decode($_POST['tx_imagem']));
	$imagem 	= utf8_decode($_FILES['imagem']['name']);
	
	function insereImagem($tit_imagem, $tx_imagem, $imagem){
		$sqlInsereImagem = "INSERT INTO portfolio (tit_imagem, tx_imagem, imagem) VALUES ('$tit_imagem', '$tx_imagem', '$imagem');";
		insert_db($sqlInsereImagem);
	}
	
	function deleteImagem($id){
		$sqlDelete = "DELETE FROM portfolio WHERE id = '$id'";
		if(deleta_db($sqlDelete)){
			echo "sucesso";
		} else {
			echo "erro";
		}
	}
	
	if($acao == ""){
		if($imagem == ""){
			echo "<script type='text/javascript'>alert('Insira a imagem que deseja cadastrar!'); history.back();</script>";
		}
		
		$uploaddir = '../uploads/';
		$uploadfile = $uploaddir . $imagem;
		
		if(move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
			insereImagem($tit_imagem, $tx_imagem, $imagem);
			echo "<script type='text/javascript'>alert('Imagem cadastrada com sucesso!'); window.location = 'index.php';</script>";
		} else {
			echo "<script type='text/javascript'>alert('Ocorreu um erro ao cadastrar a imagem, por favor tente novamente!'); history.back();</script>";
		}
	} else if($acao == "excluir"){
		deleteImagem($id);
	}
?>