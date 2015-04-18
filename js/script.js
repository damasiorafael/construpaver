/*
 * Nome: script.js
 * Desenvolvido por: Rafael Damasio (Intrepido 53)
 * Data da Criação: 01-02-2015
 * Copyright (c) 2015 - Construpaver
 */

$(document).ready(function(){
	
	$(".portfolio").colorbox({
		rel:'portfolio',
		width:800
	});
	$("#slideshow").click(function(){
		window.location = "portfolio.php";
	});
	$("#slideshow").fadeSlideShow();
	
	//$('a.external').attr('target','_blank');

	/*$(".hover-fade,.scrollableArea a").hover(function(){
		$(this).fadeTo("fast", 0.8);
			},function(){
		$(this).fadeTo("fast", 1.0);
	});*/
	
	scrollMenu = function(scrollTop){
		if(scrollTop > 114){
			$(".header-alternative").addClass("header-visible");
		} else {
			$(".header-alternative").removeClass("header-visible");
		}
	}
	
	$(window).scroll(function(){
		var $this = $(this),
		scrollTop = $this.scrollTop();
		scrollMenu(scrollTop);
	});
	
	//VALIDACAO E ENVIO DO FORMULÁRIO DE CONTATO
	$("#fale-conosco").validate({
		elementError: "span",
		rules: {
			nome: "required",
			email: {
				required: true,
				email: true
			},
			mensagem: "required"
		},
		messages: {
			nome: "Por favor preencha o campo corretamente!",
			email: "Por favor preencha o campo corretamente!",
			mensagem: "Por favor preencha o campo corretamente!"
		},
		submitHandler: function(form){
			var dados = $("#fale-conosco").serialize();
			//alert(dados)
			$.ajax({
				type: "POST",
				url: "fale-conosco-envia.php",
				data: dados,
				success: function(data){
					if(data == "sucesso"){
						alert("E-mail enviado com sucesso");
						window.location.href=window.location.href;
					} else {
						alert(data);
					}
				}
			});
		}
	});
});