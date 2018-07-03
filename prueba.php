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
    function goToByScroll(id){
          // Reove "link" from the ID
        id = id.replace("link", "");
          // Scroll
        $('html,body').animate({
            scrollTop: $("#"+id).offset().top},
            'slow');
    }

    $("#sidebar > ul > li > a").click(function(e) { 
          // Prevent a page reload when a link is pressed
        e.preventDefault(); 
          // Call the scroll function
        goToByScroll($(this).attr("id"));           
    });
</script>
</head>
<body>
	<div class="fill" >
		<div id="inicio">
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
			<div class="" >
			<!--
				<div class="d-flex">
					<header class="" id="menu">
						<nav>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a href="#home" class="nav-link">Inicio</a>
								</li>
								<li class="nav-item">
									<a href="#about" class="nav-link" >Quienes somos</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Servicios</a>
								</li>
								<li class="nav-item">
									<a href="#contactForm" class="nav-link">Contacto</a>
								</li>
							</ul>
						</nav>
					</header>
				</div>
			 <-->
				<section class="" id="home">
						<p class=""  id="homeTextTitle">“Nuestro compromiso es <br>dar soluciones reales”</p>
						<p class="" id="homeTextDetail">
							Somos un estudio contable que presta asesor&iacute;as y servicios a peque&ntilde;as y <br>
							medianas empresas, en el &aacute;rea contable, financiera, tributaria y laboral. <br>
							Contamos con profesionales de amplia experiencia
						</p>
						<button class="" id="homeContactButton">CONT&Aacute;CTENOS</button>
				</section>
			</div>
		</div>
	</div>
	<div class="">
		<section>test</section>
		<section>test</section>
	</div>
	<footer class=""></footer>
</body>
</html>