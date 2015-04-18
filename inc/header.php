<!-- FACEBOOK SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1561052164142480&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FACEBOOK SDK -->

<!-- Header Section -->
<header class="header">
	<div class="container-logo">
    	<a href="index.php" title="home" class="logo-home">
        	<span>home</span>
        </a>
    </div>
	<section class="container-menu">
    	<nav class="menu-principal">
        	<ul>
            	<li class="menu-1 <?php if($pag == "home"){ ?>menu-ativo<?php } ?>">
                	<a href="index.php" title="home" class="menu-home">home</a>
                </li>
                <li class="menu-2 <?php if($pag == "empresa"){ ?>menu-ativo<?php } ?>">
                	<a href="empresa.php" title="empresa" class="menu-empresa">empresa</a>
                </li>
                <li class="menu-3 <?php if($pag == "servicos"){ ?>menu-ativo<?php } ?>">
                	<a href="servicos.php" title="serviços" class="menu-servicos">serviços</a>
                </li>
                <li class="menu-4 <?php if($pag == "contato"){ ?>menu-ativo<?php } ?>">
                	<a href="contato.php" title="contato" class="menu-contato">contato</a>
                </li>
                <li class="menu-5 <?php if($pag == "portfolio"){ ?>menu-ativo<?php } ?>">
                	<a href="portfolio.php" title="portfólio" class="menu-portfolio">portfólio</a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="container-topo">
    	<div class="topo">
            <h1>
            	<?php if($pag == "home"){ ?>
                	<span class="tit-1 robotolight">excelente</span>
                	<span class="tit-2 robotobold">acabamento</span>
                <?php } ?>
                <?php if($pag == "empresa"){ ?>
                	<span class="tit-1 robotolight">mão-de-obra</span>
                	<span class="tit-2 robotobold">especializada</span>
                <?php } ?>
                <?php if($pag == "servicos"){ ?>
                	<span class="tit-1 robotolight">excelência no</span>
                	<span class="tit-2 robotobold">resultado</span>
                <?php } ?>
                <?php if($pag == "portfolio"){ ?>
                	<span class="tit-1 robotolight">projeto para cada</span>
                	<span class="tit-2 robotobold">necessidade</span>
                <?php } ?>
                <?php if($pag == "contato"){ ?>
                	<span class="tit-1 robotolight">orçamento sem</span>
                	<span class="tit-2 robotobold">compromisso</span>
                <?php } ?>
            </h1>
            <div class="img-destaque <?php if($pag == "home"){ ?>img-destaque-home<?php } ?>"></div>
        </div>
    </section>
</header>
<!-- Header Section -->

<?php if($pag == "servicos" || $pag == "portfolio" ){ ?>
<!-- Header Section Alternative -->
<header class="header header-alternative">
	<section class="container-menu">
    	<nav class="menu-principal">
            <div class="container-logo">
                <a href="index.php" title="home" class="logo-home">
                    <span>home</span>
                </a>
            </div>
        	<ul>
            	<li class="menu-1 <?php if($pag == "home"){ ?>menu-ativo<?php } ?>">
                	<a href="index.php" title="home" class="menu-home">home</a>
                </li>
                <li class="menu-2 <?php if($pag == "empresa"){ ?>menu-ativo<?php } ?>">
                	<a href="empresa.php" title="empresa" class="menu-empresa">empresa</a>
                </li>
                <li class="menu-3 <?php if($pag == "servicos"){ ?>menu-ativo<?php } ?>">
                	<a href="servicos.php" title="serviços" class="menu-servicos">serviços</a>
                </li>
                <li class="menu-5 <?php if($pag == "portfolio"){ ?>menu-ativo<?php } ?>">
                	<a href="portfolio.php" title="portfólio" class="menu-portfolio">portfólio</a>
                </li>
                <li class="menu-4 <?php if($pag == "contato"){ ?>menu-ativo<?php } ?>">
                	<a href="contato.php" title="contato" class="menu-contato">contato</a>
                </li>
            </ul>
        </nav>
    </section>
</header>
<!-- Header Section Alternative -->
<?php } ?>