<?php $pag = "contato"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<?php include("inc/head.php"); ?>
<title>Construpaver</title>
</head>
<body>

<?php include("inc/header.php"); ?>

<!-- Body Section -->
<section class="body-section">
	<div class="container-body container-contato">
    	<div class="pull-left">
        	<div class="box-home box-contato">
            	<h2>
                	<span class="tit-1 robotolight">fale</span>
                	<span class="tit-2 robotobold">conosco</span>
                </h2>
                <form role="form" name="fale-conosco" id="fale-conosco" class="fale-conosco" novalidate>
                	<div class="content-form">
                        <div class="form-group">
                            <label for="nome">Nome*</label>
                            <input type="text" class="form-control" id="nome" name="nome" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" />
                        </div>
                        <div class="form-group form-group-cidade">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" />
                        </div>
                        <div class="form-group form-group-estado">
                            <label for="estado">Estado</label>
                            <select id="estado" name="estado">
                                <option value="">UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input type="text" class="form-control" id="assunto" name="assunto" />
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem*</label>
                            <textarea id="mensagem" name="mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">ENVIAR</button>
                    </div>
                </form>
           	</div>
        </div>
    </div>
</section>
<!-- Body Section -->

<?php include("inc/footer.php"); ?>

</body>
</html>