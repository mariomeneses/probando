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
				<script src="js/script.js"></script>
				<script src="js/jquery-3.3.1.min.js"></script>
				<script src="js/modernizr-custom_2.js"></script>

				<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
				<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
				<link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
				<link href="css/style.css" rel="stylesheet" type="text/css" />

					<!--[if lt IE 9 ]>
						<script type="text/javascript" src="js/html5shiv.min.js"></script>
						<script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
						<script type="text/javascript" src="js/respond.min.js"></script>
						<![endif]-->

					</head>

					<!-- NAV MENU-->
					<div class="nav-side-menu menuHeight">
						<div class="brand">Optic-Red</div>
						<i class="glyphicon glyphicon-menu-hamburger toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

						<div class="menu-list">

							<ul id="menu-content" class="menu-content collapse out">
								<a href="dashboard.php"><li>&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Dashboard</li></a>
								<li  data-toggle="collapse" data-target="#sails" ><a href="#"><i class="glyphicon glyphicon-usd"></i> Ventas <span class="glyphicon glyphicon-menu-down alignIconRight"></span></a></li>
								<ul class="sub-menu collapse" id="sails">
									<a href="nuevaVenta.php" ><li><span class="glyphicon glyphicon-menu-right"></span> Nueva Venta</li></a>
									<a href="ventasPendientes.php"><li><span class="glyphicon glyphicon-menu-right"></span> Ventas Pendientes</li></a>
									<a href="ventasFinalizadas.php"><li><span class="glyphicon glyphicon-menu-right"></span> Ventas Finalizadas</li></a>
									<a href="garantia.php"><li><span class="glyphicon glyphicon-menu-right"></span> Garantía</li></a>
									<!-- <a href="buscarVenta.php"><li><span class="glyphicon glyphicon-menu-right"></span> Buscar Venta</li></a>-->
								</ul>
								<li  data-toggle="collapse" data-target="#empleados">
									<a href="#"><i class="glyphicon glyphicon-user"></i> Empleados <span class="glyphicon glyphicon-menu-down alignIconRight"></span></a>
								</li>
								<ul class="sub-menu collapse" id="empleados">
									<a href="vendedor.php"><li><span class="glyphicon glyphicon-menu-right"></span> Vendedor</li></a>
									<a href="captador.php"><li><span class="glyphicon glyphicon-menu-right"></span> Captador</li></a>
								</ul>
								<a href="inventario.php"><li>&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;&nbsp;Inventario</li></a>
								<a href="insumos.php"><li>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-copy"></span> Insumos</li></a>
								<!--<a href="cierreCaja.php"><li>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-lock"></span> Cierre de Caja</li></a>-->
								<li  data-toggle="collapse" data-target="#cierres">
									<a href="#"><i class="glyphicon glyphicon-lock"></i> Cierre de Caja <span class="glyphicon glyphicon-menu-down alignIconRight"></span></a>
								</li>
								<ul class="sub-menu collapse" id="cierres">
									<a href="cierreCaja.php"><li><span class="glyphicon glyphicon-menu-right"></span> Cierre de Caja </li></a>
									<a href="buscarCierreCaja.php"><li><span class="glyphicon glyphicon-menu-right"></span> Buscador </li></a>
								</ul>
							</ul>
						</div>
					</div>

					<!-- USER NAV -->

					<div class="navbar navbar-default navbar-fixed-top colorFixNav" role="navigation" id="userDataLogged">
						<div class="container"> 

							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle colorUserBtn" data-toggle="dropdown">
											<span class="glyphicon glyphicon-user"></span>
											<strong>Usuario</strong>
											<span class="glyphicon glyphicon-chevron-down"></span>
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="navbar-login">
													<div class="row">
														<div class="col-lg-12">
															<p class="text-left"><strong></strong></p>
															<p class="text-left"></p>
														</div>
															<div class="col-lg-12">
																<button type="button" class="btn btn-success col-lg-12" data-toggle="modal" data-target="#cambiarDeTienda">Cambiar de tienda</button>
															</div>
														</div>
													</div>
												</li>
												<li class="divider navbar-login-session-bg"></li>
												<li class="navbar-login-session-bg">
													<div class="navbar-login navbar-login-session">
														<div class="row">
															<div class="col-lg-6">
																<p>
																	<a href="cambiarDatosUsuario.php" class="btn btn-primary btn-block">Cambiar Datos</a>
																</p>
															</div>
															<div class="col-lg-6">
																<p>
																	<a href="logout.php" class="btn btn-danger btn-block">Logout</a>
																</p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="modal fade" id="cambiarDeTienda" role="dialog" data-backdrop="static" data-keyboard="false">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Actualmente se encuentra en la tienda del</h4>
									</div>
									<div class="modal-body">
										<p>¿Desea cambiar a la tienda del </p>
									</div>
									<div class="modal-footer">
										<button onclick="cambiarTienda()" data-dismiss="modal" type="button" class="btn btn-success">Aceptar</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
									</div>
								</div>
							</div>
						</div>


						<!-- CONTAINER -->
						<div class="contentMain">
							<div>
								<form class="form-horizontal">
									<fieldset class="addProductFormWidth">
										<!-- Form Name -->
										<legend>Agregar Insumo</legend>

										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="addNameInsumo">Ingrese Insumo</label>  
											<div class="col-md-4">
												<input type="text" id="addNameInsumo" name="addNameInsumo" placeholder="Ingrese insumo" class="form-control input-md" >
											</div>
										</div>
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="addDetailInsumo">Ingrese Detalle</label>  
											<div class="col-md-4">
												<textarea class="form-control" id="addDetailInsumo" name="addDetailInsumo" rows="4" placeholder="Detalle del insumo" id="comment"></textarea>
											</div>
										</div>
					<!-- Select Basic 
					<div class="form-group">
						<label class="col-md-4 control-label" for="addStoreInsumo">Seleccione Tienda</label>
						<div class="col-md-4">
							<select id="addStoreInsumo" name="addStoreInsumo" class="form-control">
								<option value="" disabled selected>Seleccione una tienda</option>
								<option value="1">Tercero</option>
								<option value="2">Quinto</option>
							</select>
						</div>
					</div>-->
					<input type="hidden" id="addStoreInsumo" name="addStoreInsumo"/>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="addPriceInsumo">Ingrese Precio</label>  
						<div class="col-md-4">
							<input type="number" id="addPriceInsumo" name="addPriceInsumo" placeholder="Ingrese el precio" class="form-control input-md" >
						</div>
					</div>
					<!-- Button (Double) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="button1id"></label>
						<div class="col-md-8">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSuppliesConfirmDialog">Agregar Insumo</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<footer>
	</footer>
	</body>
	</html>