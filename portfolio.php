<?php
	$pag = "portfolio";
	include("admin/inc/config.php");
?>
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
	<div class="container-body container-portfolio">
    	<div class="pull-left">
        	<div class="box-home box-portfolio">
            	<h2>
                	<span class="tit-1 robotolight">alguns de </span>
                	<span class="tit-2 robotobold">nossos trabalhos</span>
                </h2>
            </div>
            <div class="content-portfolio content-lista content-lista-portfolio">
            	<ul>
                	<?php
						$sqlConsulta 	= "SELECT * FROM portfolio";
						$resultConsulta = consulta_db($sqlConsulta);
						$num_rows 		= mysql_num_rows($resultConsulta);
						while($consulta = mysql_fetch_object($resultConsulta)){
					?>
					<li>
                    	<a href="uploads/<?php echo $consulta->imagem; ?>" title="<span id='title-foto'><?php echo utf8_encode($consulta->tit_imagem); ?></span><span id='texto-foto'><?php echo utf8_encode($consulta->tx_imagem); ?></span>" class="portfolio">
							<img src="uploads/<?php echo $consulta->imagem; ?>" alt="Img estaque" />
                        </a>
					</li>
					<?php
						}
					?>
                	<?php /*for($i = 1; $i <= 12; $i++){ ?>
                	<li>
                    	<a href="img/img-portfolio-grande-1.png" title="<span id='title-foto'>título da foto <?php echo $i; ?></span><span id='texto-foto'>texto da foto <?php echo $i; ?></span>" class="portfolio">
                        	<img src="img/img-portfolio-1.png" alt="" width="465" height="145" />
                        </a>
                    </li>
                    <?php }*/ ?>
                </ul>
            </div>
        </div>
    </div>	
</section>
<!-- Body Section -->

<?php include("inc/footer.php"); ?>

</body>
</html>