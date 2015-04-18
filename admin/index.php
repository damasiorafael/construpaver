<?php
header("Content-Type: text/html; charset=utf8",true);
include("inc/config.php");

/*$_SESSION['login'] = "Admin";
//echo "<script type='text/javascript'>alert('Essa é a sessão $login');</script>";*/
if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['senha']) == true)) header('Location: login.php');//CRIAR REDIRECIONAMENTO PRA INDEX

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin - Construpaver | Dashboard</title>
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="../img/favicon.ico" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                    	<div class="container-logo container-logo-internas">
                            <a href="index.php" title="home" class="logo-home">
                                <span>home</span>
                            </a>
                        </div>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Bem vindo!
                                        <small>Admin</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Admin
                        <small>Painel de controle</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Portfólio</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-4 connectedSortable">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Adicionar Portfólio</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form enctype="multipart/form-data" action="portfolio-envia.php" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="tit_imagem">Título da imagem</label>
                                            <input type="text" class="form-control" id="tit_imagem" name="tit_imagem" placeholder="Digite o título da imagem" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="tx_imagem">Texto da imagem</label>
                                            <input type="text" class="form-control" id="tx_imagem" name="tx_imagem" placeholder="Digite o texto da imagem" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="imagem">Imagem *</label>
                                            <input type="file" id="imagem" name="imagem" />
                                            <p class="help-block">Arquivos .png, .jpg, .gif - (Tam. máximo 1000KB).</p>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Adicionar</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                        </section><!-- /.Left col -->
                        
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-8 connectedSortable">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Portfólios</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="50" style="text-align:center;">ID</th>
                                                <th>Título da imagem</th>
                                                <th>Texto da imagem</th>
                                                <th width="100" style="text-align:center;">Imagem</th>
                                                <th width="100" align="center">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
												$sqlConsulta 	= "SELECT * FROM portfolio";
												$resultConsulta = consulta_db($sqlConsulta);
												$num_rows 		= mysql_num_rows($resultConsulta);
												while($consulta = mysql_fetch_object($resultConsulta)){
												
											?>
                                            <tr>
                                            	<td align="center"><?php echo $consulta->id; ?></td>
                                                <td><?php echo utf8_encode($consulta->tit_imagem); ?></td>
                                                <td><?php echo utf8_encode($consulta->tx_imagem); ?></td>
                                                <td align="center">
                                                	<img src="../uploads/<?php echo $consulta->imagem; ?>" width="80" class="img-mini" />
                                                </td>
                                                <td align="center">
                                                	<button class="btn btn-primary btn-sm btn-del" rel="<?php echo $consulta->id; ?>"><i class="fa fa-remove"></i> Excluir</button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <?php
											if($num_rows > 1){
										?>
                                        <tfoot>
                                            <tr>
                                                <th width="50" style="text-align:center;">ID</th>
                                                <th>Título da imagem</th>
                                                <th>Texto da imagem</th>
                                                <th width="100" style="text-align:center;">Imagem</th>
                                                <th width="100" align="center">&nbsp;</th>
                                            </tr>
                                        </tfoot>
										<?php } ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>
        
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        
        <!-- page script -->
        <script type="text/javascript">
            $(function(){
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
			$(".btn-del").click(function(){
				var conf = confirm("Essa ação não pode ser desfeita, tem certeza que deseja continuar?");
				if (conf == true) {
					var $this = $(this);
					var id = $this.attr("rel");
					$.ajax({
						type: "POST",
						url: "portfolio-envia.php",
						data: "acao=excluir&id="+id,
						success: function(data){
							if(data == "sucesso"){
								alert("Exclusão executada com sucesso!");
								window.location.href=window.location.href;
							} else {
								alert(data);
							}
						}
					});
				} else {
					return false;
				}
			});
        </script>

    </body>
</html>