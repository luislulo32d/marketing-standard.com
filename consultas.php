<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta content="all" name="robots" />
		<meta content="7 days" name="revisit-after" />
		<meta
			content="Marketing Standard.net, Marketing-standard.com"
			name="author"
		/>
		<meta content="Marketing Standard" name="designer" />
		<meta name="robots" content="index, follow" />
		<title>Marketing Standard - Consultas</title>
		<meta name="description" content="Marketing Standard | Consultas" />
		<meta
			name="keywords"
			content="petición, consulta gratis,marketing,manual, diseño web, desarrollo, planes, listo para usar, seo, optimización de motores de búsqueda, optimización de medios de comunicación social, smo, e-marketing, CRM"
		/>
		<meta
			name="subject"
			content="Servicios de Mercadeo, e-marketing e e-business."
		/>
		<link rel="canonical" href="https://marketing-standard.com/consultas.php" />
		<!-- [LINKS] -->
		<?php
			include_once 'includes/link.php'
		?>
		<!-- [END LINKS] -->
	</head>

	<body>
		<!--[HEADER] -->
		<?php
				include_once 'includes/header_es.php'
		?>
		<!-- [END HEADER] -->

					<div class="slide-home-cont">
						<img
							src="images/frontend/slide-info-request.jpg"
							width="100%"
							alt="Info request"
						/>

						<div class="slide-h1-cont">
							<h1>Consultas</h1>
						</div>

						<!-- <div class="slide-notices-cont">
                        <div class="slide-notices-bg">
                            <img src="images/frontend/bannertop-notices-icon.png" width="100%" alt="text icon">
                            <marquee SCROLLDELAY=150><p class="text-white pt-reg f-big-x">We focus in trade projects, marketing activities and promotion management for you &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; Our process ensures specialized market presence to our clients, mostly targeted on small and medium-sized enterprises &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; We offer a specialized marketing service adapted to the needs and conditions in their local and international environments </p></marquee>
                        </div>
                    </div> -->
					</div>
				</div>
			</div>

			<div class="row initial-row">
				<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
					<div id="content-center" class="content-center-forms">
						<h1>Consultas y solicitud de información</h1>
						<h2 class="visible-xs">
							Conozca más acerca de nuestra propuesta, costos, plazos de pago o
							de compras. Por favor, especifique a continuación:<br /><br />
						</h2>
						<h2 class="hidden-xs">
							Conozca más acerca de nuestra propuesta, costos, plazos de<br />pago
							o de compras. Por favor, especifique a continuación:<br /><br />
						</h2>

						<div class="inners-cont">
							<form method="post" action="php/recaptchav3.php">
								<div class="request-row">
									<label class="label-forms info-label"
										>Tipo de solicitud:</label
									>

									<select name="tipodesolicitud" id="tipodesolicitud" required>
										<option value="Information Request"
											>Solicitud de información</option
										>
										<option value="Free Quote">Consulta gratis</option>
										<option value="Billing Options">Opciones de pago</option>
										<option value="Terms">Reunión - Compra</option>
									</select>
								</div>

								<div class="request-row">
									<label class="label-forms info-label">Nombre:</label>
									<input
										name="solicitante"
										type="text"
										id="solicitante"
										maxlength="32"
										minlength="2"
										pattern="[A-Za-z]*"
										required
									/>
								</div>

								<div class="request-row">
									<label class="label-forms info-label">Compañía:</label>
									<input
										name="empresa"
										type="text"
										id="empresa"
										maxlength="32"
										minlength="2"
										pattern="[A-Za-z]*"
										required
									/>
								</div>

								<div class="request-row">
									<label class="label-forms info-label">Teléfono:</label>
									<input
										name="txtTelefonoSolicitud"
										type="text"
										id="txtTelefonoSolicitud"
										pattern="[0-9]*"
										minlength="4"
										maxlength="22"
										required
									/>
								</div>

								<div class="request-row">
									<label class="label-forms info-label">Email:</label>
									<input
										name="txtCorreoSolicitud"
										id="txtCorreoSolicitud"
										type="email"
										maxlength="50"
										minlength="4"
										required
									/>
								</div>

								<div class="request-row">
									<label class="label-forms info-label">Confirma Email:</label>
									<input
										name="txtConfirmacionCorreoSolicitud"
										id="txtConfirmacionCorreoSolicitud"
										onchange="email();"
										type="email"
										maxlength="50"
										minlength="4"
										required
									/>
								</div>
								<div class="request-row">
									<b><span class="text-danger" id="error-email"></span></b>
								</div>
								<input type="hidden" name="form" value="request-spanish" />
								<div class="request-row">
									<!--<div class="submit-form-info-r pt-bd txt-white f-big-xx"><a href="form-inactivo.html">CONSULTAR</a></div>-->
									<!--<a href="form-inactivo.html">--><input
										type="submit"
										id="submit"
										class="form-submits-button3"
										value="CONSULTAR"
									/><!--</a>-->
									<input
										type="hidden"
										name="recaptcha_response"
										id="recaptchaResponse"
									/>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
					<div id="right-column">
						<div class="clients-banner" style="margin-top: 25%;">
							<ul id="sb-slider" class="sb-slider">
								<li>
									<img src="images/frontend/slide-ad-1-es.jpg" alt="image1" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-2-es.jpg" alt="image2" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-3-es.jpg" alt="image3" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-4-es.jpg" alt="image4" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-5-es.jpg" alt="image5" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-6-es.jpg" alt="image6" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-7-es.jpg" alt="image7" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-8-es.jpg" alt="image8" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-9-es.jpg" alt="image9" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-10-es.jpg" alt="image10" />
								</li>
							</ul>

							<div id="nav-options" class="nav-options">
								<span id="navPlay">Play</span>
								<span id="navPause">Pause</span>
							</div>
						</div>

						<!-- <div class="salespromotion-banner">
                        <a href="e-marketing.html"><img src="images/frontend/rightcolumn-salespromotion.png" alt="Sales and Promotion Management" class="salespromotion-about-us"/></a>
                    </div>  -->
					</div>
				</div>
			</div>

			<!-- [FOOTER] -->
			<?php
				include	'includes/footer_es.php'
			?>
			<!-- [END FOOTER] -->

		<script src="https://www.google.com/recaptcha/api.js?render=6LfaLLwUAAAAAGX1f7yaSL76uu-mLMK9CxdP59d5"></script>
		<script>
			grecaptcha.ready(function () {
				grecaptcha
					.execute("6LfaLLwUAAAAAGX1f7yaSL76uu-mLMK9CxdP59d5", {
						action: "contact",
					})
					.then(function (token) {
						var recaptchaResponse = document.getElementById(
							"recaptchaResponse"
						);
						recaptchaResponse.value = token;
					});
			});
		</script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

		<script language="JavaScript">
			function abreSitio() {
				var URL = "http://";
				var web =
					document.form1.sitio.options[document.form1.sitio.selectedIndex]
						.value;
				window.open(URL + web, "_self", "");
			}
		</script>

		<script
			type="text/javascript"
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"
		></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			function email() {
				var confirmar_email = document.getElementById(
					"txtConfirmacionCorreoSolicitud"
				).value;
				var email = document.getElementById("txtCorreoSolicitud").value;
				if (email != confirmar_email) {
					$("#error-email").php("Verifique confirmacion de email");
					document.getElementById("submit").disabled = true;
				} else {
					document.getElementById("submit").disabled = false;
					$("#error-email").php("");
				}
			}
		</script>
		<script type="text/javascript">
			$(function () {
				var Page = (function () {
					var $navArrows = $("#nav-arrows").hide(),
						$navOptions = $("#nav-options").hide(),
						$shadow = $("#shadow").hide(),
						slicebox = $("#sb-slider").slicebox({
							onReady: function () {
								$navArrows.show();
								$navOptions.show();
								$shadow.show();
							},
							orientation: "r",
							cuboidsCount: 5,
						}),
						init = function () {
							initEvents();
						},
						initEvents = function () {
							// add navigation events
							$navArrows.children(":first").on("click", function () {
								slicebox.next();
								return false;
							});

							$navArrows.children(":last").on("click", function () {
								slicebox.previous();
								return false;
							});

							$("#navPlay").on("click", function () {
								slicebox.play();
								return false;
							});

							$("#navPause").on("click", function () {
								slicebox.pause();
								return false;
							});
						};

					return { init: init };
				})();

				Page.init();
			});
		</script>

		<script>
			(function (i, s, o, g, r, a, m) {
				i["GoogleAnalyticsObject"] = r;
				(i[r] =
					i[r] ||
					function () {
						(i[r].q = i[r].q || []).push(arguments);
					}),
					(i[r].l = 1 * new Date());
				(a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m);
			})(
				window,
				document,
				"script",
				"//www.google-analytics.com/analytics.js",
				"ga"
			);

			ga("create", "UA-10690922-1", "auto");
			ga("send", "pageview");
		</script>
	</body>
</html>
