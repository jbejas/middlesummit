<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Middle Managers Summit</title>

	<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/mediaqueries.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="scripts/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <div class="container-fluid disertantes">

        <div class="row noMargin">
        	<div class="col-xs-12 noPadding">
            	<div class="container">
                	<div class="row">
                    	<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 text-center white">
                        	<h3 class="titulo-agenda separacion5 txt21"><strong>TARIFAS</strong></h3>
                        </div>
                    </div>
                    <div class="row row-centered">
                    	<div class="col-xs-12 col-lg-8 col-sm-8 col-md-8 col-centered descuento text-center">
                        	<span class="txt21 black">Hasta 22/5</span><br>
                            <span class="green txt36"><strong>40% DESCUENTO</strong></span>
                        </div>
                    </div>
                    <div class="row row-centered">
                    	<div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 col-centered">
                        	<table class="table table-condensed white">
                              <tbody>
                              	<tr class="bordeArriba">
                                  <td></td>
                                  <td class="txt20"><strong>Valor Real</strong></td>
                                  <td class="txt20"><strong>1 D&Iacute;A</strong><br><span class="txt16">(23 de Junio)</span></td>
                                  <td class="txt20 cajaVerde"><strong>2 D&Iacute;AS</strong><br><span class="txt16">(23 y 24 de Junio)</span></td>
                                </tr>
                                <tr>
                                  <td class="txt20 text-left" scope="row"><strong>PASE INDIVIDUAL</strong></td>
                                  <td class="txt20">USD 310 + IVA</td>
                                  <td class="txt20">USD 180 + IVA</td>
                                  <td class="txt20 cajaVerde">USD 270 + IVA</td>
                                </tr>
                                <tr class="bordePunteado">
                                  <td class="txt20 text-left" scope="row"><strong>Pase Corporativo</strong><br><span class="txt16">(Grupos de 3 personas o más)</span></td>
                                  <td class="txt20">USD 290 + IVA</td>
                                  <td class="txt20">USD 170 + IVA</td>
                                  <td class="txt20 cajaVerde">USD 260 + IVA</td>
                                </tr>
                              </tbody>
                            </table>
                            <br><br>
                            <p class="txt20 white text-left">// <span class="green">Los pases incluyen:</span> Material académico – Desayuno – Coffee Breaks – Certificado de Asistencia</p><br>
                            <p class="txt20 white text-left">// <span class="green">Almuerzo para ambos tiene un costo adicional de</span> <strong>USD 20 + IVA</strong></p><br>
                            <p class="text-center"><img src="images/flechaAbajo.gif" alt=""></p>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-xs-12">
                        	<br><br>
                        </div>
                    </div>
                </div>
            </div>      
        </div>

    </div>
    
    <div class="container-fluid formInscripcion">
    	<div class="row noMargin">
        	<div class="col-xs-12">
            	<div class="container">
                	<div class="row">
                    	<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 text-center green">
                        	<h3 class="titulo-agenda separacion5 txt21"><strong>INSCRIPCIONES</strong></h3>
                        </div>
                    </div>
                	<div class="row row-centered">
                    	<div class="col-lg-6 col-md-8 col-sm-10 col-xs-10 col-centered bgWhiteForm">
                            	<form action="php/email.php" name="formContacto" id="formContacto" enctype="multipart/form-data" method="post" validate>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 text-left">
                                        	<?php if($_GET['e'] == 1) { ?>
                                            <div class="alert alert-success" id="success" role="alert">
                                            	<strong>Mensaje Enviado!</strong> Tu mensaje ha sido enviado correctamente.
                                            </div>
                                            <?php } ?>
                                            <?php if($_GET['e'] == 2) { ?>
                                            <div class="alert alert-danger" id="error" role="alert">
                                            	<strong>Error!</strong> Se produjo un error al enviar tu mensaje, intentalo nuevamente.
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 black txt16 lh34 text-right">
                                            Nombre y Apellido
                                        </div>
                                        <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required><p class="gris txt14 text-left mt5">* Requerido</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-xs-12"><br></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 black txt16 lh34 text-right">
                                            Correo Electronico
                                        </div>
                                        <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required><p class="gris txt14 text-left mt5">* Requerido</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-xs-12"><br></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 black txt16 lh34 text-right">
                                            Tel&eacute;fono
                                        </div>
                                        <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
                                            <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel&eacute;fono" required><p class="gris txt14 text-left mt5">* Requerido</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-xs-12"><br></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 black txt16 lh34 text-right">
                                            Empresa
                                        </div>
                                        <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
                                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-xs-12"><br></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 black txt16 lh34 text-right">
                                            Cargo
                                        </div>
                                        <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
                                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-xs-12"><br></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-4 black txt16 lh34 text-right">
                                            Tipo de Pase
                                        </div>
                                        <div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
                                            <select class="form-control" name="pase" id="pase">
                                              <option>Pase Individual - 1 D&iacute;a</option>
                                              <option>Pase Individual - 2 D&iacute;as</option>
                                              <option>Pase Corporativo - 1 D&iacute;a</option>
                                              <option>Pase Corporativo - 2 D&iacute;as</option>
                                              <option>Pase Individual - 1 D&iacute;a + Almuerzo</option>
                                              <option>Pase Individual - 2 D&iacute;as + Almuerzo</option>
                                              <option>Pase Corporativo - 1 D&iacute;a + Almuerzo</option>
                                              <option>Pase Corporativo - 2 D&iacute;as + Almuerzo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" name="enviar" id="enviar">ENVIAR</button>
                                </form>                     	
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row noMargin">
            <div class="col-xs-12">
                <br><br>
            </div>
        </div>
    </div>
    
    <div class="container-fluid informacion">
    	<div class="row noMargin">
        	<div class="col-xs-12">
            	<div class="container">
                	<div class="row">
                    	<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 text-center white">
                        	<h3 class="titulo-informacion separacion5 txt16"><strong>M&Aacute;S INFORMACI&Oacute;N</strong></h3><br><br>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php if($_GET['e'] == 3) { ?>
                            <div class="alert alert-success" id="success" role="alert">
                                <strong>Mensaje Enviado!</strong> Tu mensaje ha sido enviado correctamente.
                            </div>
                            <?php } ?>
                            <?php if($_GET['e'] == 4) { ?>
                            <div class="alert alert-danger" id="error" role="alert">
                                <strong>Error!</strong> Se produjo un error al enviar tu mensaje, intentalo nuevamente.
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                	<div class="row">
                    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-xs">&nbsp;</div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        	<form action="php/news.php" name="formNews" id="formNews" enctype="multipart/form-data" method="post" validate>
                            	<input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su Email para recibir m&aacute;s informaci&oacute;n" required><br>
                                <button type="submit" name="enviarNews" id="enviarNews">ENVIAR</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 txt20 white bordeBlancoIzquierda">
                        	Mariscal. López 3794, Piso 4<br>
                            Asunción - Paraguay<br>
                            Tel: +595 (21) 620-7799<br>
                            <a href="mailto:info@runaconsulting.com" class="white italico">info@runaconsulting.com</a><br>
                            <a href="www.runaconsulting.com" target="_blank" class="white"><strong>www.runaconsulting.com</strong></a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-xs">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid sponsors">
    	<div class="row noMargin">
        	<div class="col-xs-12">
            	<div class="container">
                	<div class="row">
                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        	<img src="images/organizador.png" class="img-responsive" alt="Organizador">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        	<img src="images/mediapartner.png" class="img-responsive" alt="Media Partner">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        	<img src="images/sponsors.png" class="img-responsive" alt="Sponsors">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer footerAlt">
      <div class="container">
      	<ul class="hidden-xs">
        	<li class="text-center"><a href="index.php"><img src="images/menu-item-1.png" alt="Middle Managers Summit" class="img-responsive"><img src="images/menu-item-1-on.png" alt="Middle Managers Summit" class="img-responsive"></a><div class="topVerde"></div></li>
            <li class="text-center"><a href="congreso.php"><img src="images/menu-item-2.png" alt="Middle Managers Summit" class="img-responsive"><img src="images/menu-item-2-on.png" alt="Middle Managers Summit" class="img-responsive"></a><div class="topVerde"></div></li>
            <li class="text-center"><a href="seminario.php"><img src="images/menu-item-3.png" alt="Middle Managers Summit" class="img-responsive"><img src="images/menu-item-3-on.png" alt="Middle Managers Summit" class="img-responsive"></a><div class="topVerde"></div></li>
            <li class="text-center"><a href="disertantes.php"><img src="images/menu-item-4.png" alt="Middle Managers Summit" class="img-responsive"><img src="images/menu-item-4-on.png" alt="Middle Managers Summit" class="img-responsive"></a><div class="topVerde"></div></li>
            <li class="text-center"><a href="agenda.php"><img src="images/menu-item-5.png" alt="Middle Managers Summit" class="img-responsive"><img src="images/menu-item-5-on.png" alt="Middle Managers Summit" class="img-responsive"></a><div class="topVerde"></div></li>
            <li class="inscripcion text-center active"><a href="inscripciones.php"><img src="images/menu-item-6.png" alt="Middle Managers Summit" class="img-responsive"><img src="images/menu-item-6-on.png" alt="Middle Managers Summit" class="img-responsive"></a><div class="topVerde"></div></li>
        </ul>
        <div class="col-xs-12 hidden-lg hidden-md hidden-sm">
        	<select class="form-control" name="menuxs" id="menuxs">
              <option value="index.php">Home</option>
              <option value="congreso.php">D&iacute;a 1: Congreso</option>
              <option value="seminario.php">D&iacute;a 2: Seminario</option>
              <option value="disertantes.php">Disertantes</option>
              <option value="agenda.php">Agenda</option>
              <option value="inscripciones.php" selected>Inscripciones</option>
            </select>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="scripts/ie10-viewport-bug-workaround.js"></script>
    <script src="scripts/main.js"></script>
    
  </body>
</html>