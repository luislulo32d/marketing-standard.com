<div class="container msdk">
			<div class="row">
				<div class="top-bg">
					<div class="row initial-row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="logo">
									<a href="inicio.php"
										><img src="images/frontend/logo-marketing-standard.jpg"width="100%"height="100%" alt="Logo Marketing Standard"/></a>
								</div>
							</div>
							<div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
							<div class="col-xs-12 col-sm-8 col-md-7 col-lg-7">
										<div id="SkypeButton_Call_marketing_standard_1" style="z-index: 1000;"></div>
										<div style="display: flex; justify-content: space-evenly;">	
											<div class="language-cont">
												<img src="images/frontend/flag-es.jpg" width="16.13" height="12.89" alt="Flag es"/>
												<form name="form1" target="_self">
													<select class="SelectStyle" name="sitio" onChange="javascript:abreSitio()">
														<option class="txt-gray pt-reg f-big">Español</option>
														<option class="txt-gray pt-reg f-big" value="marketing-standard.com/index.php">English</option>
													</select>
												</form>
											</div>
											<div class="contact-us-cont">
												<img src="images/frontend/call-us-phone.png" width="25.13px"height="30px" alt="Phone"/>

												<p class="ptn-reg f-big-xx txt-white">&nbsp; &nbsp; &nbsp;<span class="pt-bd f-bigger-x">Llamanos: +34 951.23.93.95</span></p>
											</div>
										</div>
										
								</div>
							</div>
						</div>
					</div>
					<div class="top-right-bottom" id="menu1">
						<ul class="menu-super" style="margin: 1em;display: flex;justify-content: center;">
							
							<li class="menu-super-li pt-bd txt-blue f-big-xx">
								<a href="inicio.php">INICIO</a>
							</li>
							<li class="menu-super-li pt-reg txt-lgray f-big-xx">|</li>
							<li class="menu-super-li pt-bd txt-gray f-big-xx">
								<a href="consultas.php">CONSULTAS</a>
							</li>
							
							<li class="menu-super-li pt-reg txt-lgray f-big-xx">|</li>
							<li class="menu-super-li pt-bd txt-gray f-big-xx">
								<a href="recomiendanos.php">RECOMIÉNDANOS</a>
							</li>
							<li class="menu-super-li pt-reg txt-lgray f-big-xx">|</li>
							<li class="menu-super-li pt-bd txt-gray f-big-xx">
								<a href="contacto.php">CONTACTO</a>
							</li>
							
							
						</ul>
					</div>
					<div class="top-right-bottom" style="display: none;" id="menu2">
						<ul class="menu-super" style="margin: 1em;display: flex;justify-content: center;">
							<div style="flex-direction: column;">
								<li class="menu-super-li pt-bd txt-blue f-big-xx">
									<a href="inicio.php">INICIO</a>
								</li>
								<li class="menu-super-li pt-bd txt-gray f-big-xx">
									<a href="recomiendanos.php">RECOMIÉNDANOS</a>
								</li>
							</div>
							<div style="flex-direction: column;">
								
								<li class="menu-super-li pt-bd txt-gray f-big-xx">
									<a href="consultas.php">CONSULTAS</a>
								</li>
								
								<li class="menu-super-li pt-bd txt-gray f-big-xx">
									<a href="contacto.php">CONTACTO</a>
								</li>
							</div>
							
						</ul>
					</div>
				<script>
					function mostrarMenu(){
						let anchoPantalla = window.innerWidth;
						const menu1 = document.getElementById('menu1');
						const menu2 = document.getElementById('menu2');

						if (anchoPantalla <600) {
							menu1.style.display = 'none';
							menu2.style.display = 'flex';
						}else {
							menu1.style.display = 'flex';
							menu2.style.display = 'none';
						}

					}
					window.addEventListener('resize', mostrarMenu);
					window.addEventListener('DOMContentLoaded', mostrarMenu);
				</script>

				<div class="row">
					<!--INIT NAVBAR DESKTOP-->
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="txt-dgray pt-reg f-big-xx">
										<a href="nosotros.php">Nosotros</a>
									</li>
									<li class="txt-dgray pt-reg f-big-xx">
										<a href="negocio.php">Negocio</a>
									</li>
									<li class="txt-dgray pt-reg f-big-xx">
										<a href="servicios.php">Servicios</a>
									</li>
									<li class="txt-dgray pt-reg f-big-xx">
										<a href="compromiso.php">Compromiso</a>
									</li>
									<li class="txt-dgray pt-reg f-big-xx">
										<a href="e-marketing-es.php">e-Management</a>
									</li>
									<li class="txt-dgray pt-reg f-big-xx">
										<a href="proyectos.php">Proyectos</a>
									</li>
									<li class="txt-dgray pt-reg" style="font-size: 15px;">
										<a href="mapa-del-sitio.php">Mapa del sitio</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.container-fluid -->
					</nav>