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
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script_v1.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/modernizr-custom_2.js"></script>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/style_v2.css" rel="stylesheet" type="text/css" />

	<!--[if lt IE 9 ]>
		<script type="text/javascript" src="js/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
		<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->

		<script>
			$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    }  // End if
});
});
</script>
</head>
<body>
	<div id="contactoTop">
		<div class="d-flex" >
			<img src="img/reloj.png" alt="Reloj Rexcont">
			<div class="mr-auto p-2">Lunes a Viernes 08:30 &#8226; 18:30</div>
			<img src="img/mail.png" alt="Mail Rexcont">
			<div class="p-2">contacto@rexcont.cl</div>
			<img src="img/telefono.png" alt="telefono_rexcont">
			<div class="p-2">2 2605 1244 / 2 2605 1245</div>
		</div>
	</div>
	<div id="menu">
		<div class="d-flex" id="">
			<img src="img/reloj.png" alt="Reloj Rexcont">
			<div class="mr-auto p-2">Lunes a Viernes 08:30 &#8226; 18:30</div>
			<img src="img/mail.png" alt="Mail Rexcont">
			<div class="p-2">contacto@rexcont.cl</div>
			<img src="img/telefono.png" alt="telefono_rexcont">
			<div class="p-2">2 2605 1244 / 2 2605 1245</div>
		</div>
	</div>
	<div id="inicio">
		<div id="container">
			<p class=""  id="homeTextTitle">“Nuestro compromiso es <br>dar soluciones reales”</p>
			<p class="" id="homeTextDetail">
				Somos un estudio contable que presta asesor&iacute;as y servicios a peque&ntilde;as y <br>
				medianas empresas, en el &aacute;rea contable, financiera, tributaria y laboral. <br>
				Contamos con profesionales de amplia experiencia
			</p>
			<button class="" id="homeContactButton">CONT&Aacute;CTENOS</button>
		</div>
	</div>
	<div id="aboutMain">
		<div id="aboutContainer">
		<div>
			<div class="row">
				<div id="services" class="col">
					<img id="iconOne" src="img/AREA_RECURSOS_HUMANOS.png" alt="&Aacute;rea Recursos humanos">
					<div id="servicesStyle">
						&Aacute;REA <br>
						RECURSOS <br>
						HUMANOS
					</div>
				</div>
				<div id="services" class="col">
					<img id="iconOne" src="img/AREA_CONTABLE_Y_TRIBUTARIA.png" alt="&Aacute;rea Contable y tributaria">
					<div id="servicesStyle">
						&Aacute;REA <br>
						CONTABLE Y <br>
						TRIBUTARIA
					</div>
				</div>
				<div id="services" class="col">
					<img id="iconTwo" src="img/SERVICIOS_DE_PUESTA_EN_MARCHA.png" alt="Servicios de puesta en marcha">
					<div id="servicesStyle">
						SERVICIOS <br>
						DE PUESTA <br>
						EN MARCHA
					</div>
				</div>
				<div id="services" class="col">
					<img id="iconTwo" src="img/REINICIO_O_TERMINO_DE_EMPRESAS.png" alt="Reinicio o t&eacute;rmino de empresas">
					<div id="servicesStyle">
						REINICIO <br>
						O T&Eacute;RMINO<br>
						DE EMPRESAS
					</div>
				</div>
			</div>
			</div>
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
				<p>
					Para ello es que estamos aqu&iacute;, para estrechar lazos y trabajar de manera mancomunada. <br>
					Asesor&aacute;ndole en los campos en los cuales somos expertos y que son inherentes a nuestra profesi&oacute;n.<br><br>
				</p>
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
			<div id="aboutLineBot"></div>
		</div>
	</div>
</body>
</html>