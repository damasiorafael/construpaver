<?php
	$pag = "home";
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
	<div class="container-body container-home">
    	<div class="pull-left">
        	<div class="box-home box-1">
            	<h2>
                	<span class="tit-1 robotolight">fique</span>
                	<span class="tit-2 robotobold">por dentro</span>
                </h2>
                <div class="content-box-1">
                	<div class="fb-like-box" data-href="https://www.facebook.com/construpaver" data-width="422" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false" data-height="310" data-css="css/style.css"></div>
                </div>
            </div>
            <div class="box-home box-2">
            	<h2>
                	<span class="tit-1 robotolight">alguns</span>
                	<span class="tit-2 robotobold">clientes</span>
                </h2>
                <div class="content-box-2">
                	<ul>
                    	<li>
                        	<img src="img/logo-cacique.png" alt="Cacique" />
                        </li>
                        <li>
                        	<img src="img/logo-frisia.png" alt="Frísia" />
                        </li>
                        <li>
                        	<img src="img/logo-mrv.png" alt="MRV" />
                        </li>
                        <li>
                        	<img src="img/logo-ipiranga.png" alt="Ipiranga" />
                        </li>
                        <li>
                        	<img src="img/logo-sicoob.png" alt="Sicoob" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pull-right">
        	<div class="box-home box-3">
            	<h2>
                	<span class="tit-1 robotolight">nosso</span>
                	<span class="tit-2 robotobold">trabalho</span>
                </h2>
                <div class="content-box-3">
                	<ul id="slideshow">
						<?php
							$sqlConsulta = "SELECT * FROM portfolio";
							$resultConsulta = $PDO->query($sqlConsulta);
							while($consulta = $resultConsulta->fetch(PDO::FETCH_OBJ)){
						?>
                    	<?php
							/*$sqlConsulta 	= "SELECT * FROM portfolio";
							$resultConsulta = consulta_db($sqlConsulta);
							$num_rows 		= mysql_num_rows($resultConsulta);
							while($consulta = mysql_fetch_object($resultConsulta)){*/
						?>
								<li>
									<img src="uploads/<?php echo $consulta->imagem; ?>" alt="Img estaque" width="600" />
								</li>
                        <?php
							}
						?>
                    </ul>
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- Body Section -->

<?php include("inc/footer.php"); ?>

</body>
</html>