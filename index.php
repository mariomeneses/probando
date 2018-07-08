<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contador</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script_v8.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr-custom_3.js"></script>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/style_v15.css" rel="stylesheet" type="text/css" />

	<!--[if lt IE 9 ]>
		<script type="text/javascript" src="js/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
		<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>	
		<div class="fixed-top">
			<div id="homeDetail">
				<div class="d-flex justify-content-end container" id="officeInfo">
					<img src="img/reloj.png" alt="Reloj Rexcont">
					<div class="mr-auto p-2">Lunes a Viernes 08:30 &#8226; 18:30</div>
					<img src="img/mail.png" alt="Mail Rexcont">
					<div class="p-2"><a href="mailto:contacto@rexcont.cl">contacto@rexcont.cl</a></div>
					<img src="img/telefono.png" alt="telefono_rexcont">
					<div class="p-2"><a href="tel:2 2605 1244">2 2605 1244</a> / <a href="tel:2 2605 1245">2 2605 1245</a></div>
				</div>
				<header class="">
					<nav id="myNavbar" class="navbar navbar-expand-md ">
						<div class="container">
							<img src="img/rexcont_logo.png" id="logoImg" alt="Logo Rexcont">
							<div id="topMenu" class="navbar-collapse w-100 order-3 dual-collapse2">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a id="linkMenu" href="#home" class="nav-link">Inicio</a>
									</li>
									<li class="nav-item">
										<a id="linkMenu" href="#about" class="nav-link" >Quienes somos</a>
									</li>
									<li class="nav-item">
										<a id="linkMenu" href="#about" class="nav-link">Servicios</a>
									</li>
									<li class="nav-item">
										<a id="linkMenu" href="#contactForm" class="nav-link">Contacto</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<div class="container"><br>
						<nav class="navbar" id="navbar">
							<img src="img/rexcont_logo.png" id="logoImg" alt="Logo Rexcont">
							<button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
								<span class="navbar-toggler-icon">
								</span>
							</button>
							<div class="navbar-collapse collapse" id="collapsingNavbar3">
								<ul class="navbar-nav mx-auto">
									<li class="nav-item active">
										<a id="linkMenu" href="#home" class="nav-link">Inicio</a>
									</li>
									<li class="nav-item">
										<a id="linkMenu" href="#about" class="nav-link" >Quienes somos</a>
									</li>
									<li class="nav-item">
										<a id="linkMenu" href="#about" class="nav-link">Servicios</a>
									</li>
									<li class="nav-item">
										<a id="linkMenu" href="#contactForm" class="nav-link">Contacto</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</header>
			</div>
		</div>
		<div id="home">
			<div class="container alignCenter" id="homeText">
				<section>
					<p id="homeTextTitle">“Nuestro compromiso<br>es dar soluciones reales”</p>
					<p id="homeTextDetail">
						<br>
						Somos un estudio contable que presta asesor&iacute;as y servicios a peque&ntilde;as y <br>
						medianas empresas, en el &aacute;rea contable, financiera, tributaria y laboral. <br>
						Contamos con profesionales de amplia experiencia
					</p>
					<br><br><br>
					<a href="#contactForm" id="homeContactButton">CONT&Aacute;CTENOS</a>
				</section>
			</div>
		</div>
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col services">
						<div id="hrService" class="services">
							<img src="img/AREA_RECURSOS_HUMANOS.png" alt="&Aacute;rea Recursos humanos">
							<div id="servicesStyle">
								&Aacute;REA <br>
								RECURSOS <br>
								HUMANOS
							</div>
						</div>
						<div id="hrHover" class="servicesDetail">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									• Confecci&oacute;n Contratos de Trabajo.<br>
									• Confecci&oacute;n Finiquitos.<br>
									• Confecci&oacute;n Liquidaciones de Sueldo.<br>
									• Confecci&oacute;n y cargas Leyes Sociales Previred.<br>
									• Contratos especiales y ofertas de trabajo a extranjeros.<br>
									• Orientaci&oacute;n para tr&aacute;mites de extranjer&iacute; e.<br>
									Instituciones Previsionales.<br>
									• Asesor&iacute;s Telef&oacute;nicas RR HH.<br>
								</div>
							</div>
						</div>
					</div>
					<div class="col services">
						<div id="contService" class="services">
							<img src="img/AREA_CONTABLE_Y_TRIBUTARIA.png" alt="&Aacute;rea Contable y tributaria">
							<div id="servicesStyle">
								&Aacute;REA <br>
								CONTABLE Y <br>
								TRIBUTARIA
							</div>
						</div>
						<div id="contHover" class="servicesDetail">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									• Renta Presunta*.<br>
									• Tributaci&oacute;n Simplificada (Art&iacute;culo 14 ter Letra A)*.<br>
									• Renta Atribuida (Art. 14 A)*.<br>
									• Semi Integrado (Art. 14 B)*.<br>
									• Calculo, cargas y  pago de impuestos online.<br>
									• Confecci&oacute;n contabilidad de acuerdo a normas vigentes.<br>
									• Confecci&oacute;n Balance y Pre-Balance.<br>
									• Calculo y carga de impuesto a la renta online.<br>
									• Impuestos diferidos.<br>
									• Asesor&iacute;as Tributarias.<br><br>
									*Nuevos reg&iacute;menes tributarios por reforma tributaria vigente.
								</div>
							</div>
						</div>
					</div>
					<div class="col services">
						<div id="startService" class="services">
							<img src="img/SERVICIOS_DE_PUESTA_EN_MARCHA.png" alt="Servicios de puesta en marcha">
							<div id="servicesStyle">
								SERVICIOS <br>
								DE PUESTA <br>
								EN MARCHA
							</div>
						</div>
						<div id="startHover" class="servicesDetailTwo">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									• Confecci&oacute;n Escrituras Sociales empresas en un día.<br>
									• Iniciaci&oacute;n de Actividades.<br>
									• Evaluaci&oacute;n de personal.<br>
									• Configuraci&oacute;n e Implementaci&oacute;n de Factura Electr&oacute;nica SII o de mercado.<br>
									• Capacitaciones facturaci&oacute;n electr&oacute;nica.<br>
									• Otros servicios adicionales para la puesta en marcha.<br>
								</div>
							</div>
						</div>
					</div>
					<div class="col services">
						<div id="enterpriseService" class="services">
							<img src="img/REINICIO_O_TERMINO_DE_EMPRESAS.png" alt="Reinicio o t&eacute;rmino de empresas">
							<div id="servicesStyle">
								REINICIO <br>
								O T&Eacute;RMINO<br>
								DE EMPRESAS
							</div>
						</div>
						<div id="enterpriseHover" class="col servicesDetailTwo">
							<div id="servicesStyle">
								<!-- hover servicios -->
								<div id="servicesHover">
									• Evaluaci&oacute;n Financiera Empresa.<br>
									• Evaluaci&oacute;n de recursos humanos.<br>
									• Evaluaci&oacute;n de costos.<br>
									• Reestructuraci&oacute;n departamentos.<br>
									• T&eacute;rminos de giro<br><br>
									*Consulte por servicios especiales en regiones.
								</div>
							</div>
						</div>
					</div>
				</div><br>
				<p id="aboutTitleOne">QUIENES</p>
				<p id="aboutTitleTwo">SOMOS</p>
				<div id="aboutLine"></div>
				<div id="aboutText">
					<p>
						<b>Rexcont Adviser</b> es una empresa orientada hacia las Pyme (Peque&ntilde;a y Mediana Empresa) con la sola <br>
						finalidad de otorgar la mejor atencion a sus clientes, en un tiempo razonable y de manera confiable. <br><br>
					</p>
					<p>
						Nosotros estamos dispuestos a asesorarte en lo que usted requiera o necesite; <br>
						mas aquellas sugerencias que podamos hacerle a su proceso administrativo. <br><br>
					</p>
					<p>
						Es importante recalcar que hay procesos b&aacute;sico o pilares fundamentales dentro de la administraci&oacute;n <br>
						de una Empresa o Negocio, sobre todo si se desea tomar las mejores decisiones para hacerla crecer. <br><br>
					</p>
					<!--	<p>
							Para ello es que estamos aqu&iacute;, para estrechar lazos y trabajar de manera mancomunada. <br>
							Asesor&aacute;ndole en los campos en los cuales somos expertos y que son inherentes a nuestra profesi&oacute;n.<br><br>
						</p>-->
						<p>
							Le invitamos a ver en nuestra p&aacute;gina algunos de los muchos servicios que prestamos. <br><br>
						</p>
						<p>
							Saludos,
						</p>
						<p>
							Gerencia <br>
							Rexcont Adviser.
						</p>
					</div>
					<br>
				</div>
			</section>
			<div id="aboutLineBot" class="container"></div>
			<section id="contactForm"><br><br><br><br>
				<div id="formCenter" class="container">
					<div id="formAlign">
						<p id="formConnect">
							Cont&aacute;ctese con nosotros
						</p>
						<p id="formEvaluate">
							Evaluamos su caso
						</p>
						<p id="formText">
							Ll&aacute;menos a los tel&eacute;fonos 2 2605 1244 y 2 2605 1245,<br>
							o complete el siguiente formulario y nos pondremos <br>
							en contacto con Ud. lo antes posible. <br><br>
						</p>
						<form action="">
							<div class="form-group">
								<input type="text" id="nameInput" placeholder="Nombre"><br><br>
								<input type="email" id="emailInput" aria-describedby="emailHelp" placeholder="Correo"><br><br>
								<input type="text" id="phoneInput" aria-describedby="emailHelp" placeholder="Tel&eacute;fono"><br><br>
								<textarea id="descriptionInput" placeholder="Descripci&oacute;n de su caso" rows="7"></textarea><br><br>
								<button type="submit" id="btnSubmitForm">ENVIAR CONSULTA</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col" id="logoFoot">
							<img src="img/rexcont_logo.png" id="footerLogo" alt="Logo Rexcont">
						</div>
						<div class="col" id="footerMenu">
							<nav>
								<ul class="ulFooterMenu">
									<li><a href="#home" id="homeFooter" class="footerMenuColor">Inicio</a><div id="footerNavLineHome"></div><br></li><br>
									<li><a href="#about" id="aboutFooter" class="footerMenuColor">Servicios</a><div id="footerNavLineAbout"></div><br></li><br>
									<li><a href="#aboutTitleOne" id="usFooter" class="footerMenuColor" >Nosotros</a><div id="footerNavLineUs"></div><br></li><br>
									<li><a href="#contactForm" id="contactFooter" class="footerMenuColor">Contacto</a><div id="footerNavLineContact"></div></li>
								</ul>
							</nav>							
						</div>
						<div class="col" id="footerMenu">
							Oficinas<br><br>
							Ahumada #131, Of. 915, Santiago, Chile.<br><br>
							<a class="footerOfficeColor" href="mailto:contacto@rexcont.cl">Correo: contacto@rexcont.cl</a><br><br>
							Tel&eacute;fono: <a class="footerOfficeColor" href="tel:2 2605 1244">2 2605 1244</a> / <a href="tel:2 2605 1245" class="footerOfficeColor">2 2605 1245</a>
						</div>
						<div class="col" id="hiddenDivFooter"></div>
					</div>
					<div>
						<div id="footerLine"></div>
						<a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png" id="fbIcon" alt="facebook Rexcont"></a>&emsp;<a href="mailto:contacto@rexcont.cl"><img src="img/mail.png" alt="mail Rexcont"></a> <p id="derechos">2018 Rexcont Adviser. Todos los derechos reservados.</p>
					</div>
				</div>
			</footer>
		</body>
		</html>