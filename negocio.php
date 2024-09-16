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
		<title>Marketing Standard - Nuestro negocio</title>
		<meta
			name="Description"
			content="Marketing Standard es una empresa de comercialización de Gestión para el desarrollo empresarial. Nos enfocamos en proyectos de comercio y las actividades de marketing. hemos estado garantizando presencia en el mercado especializado a nuestros clientes desde el año 2000, en su mayoría dirigidos a las PYME (pequeñas y medianas empresas)."
		/>
		<meta
			name="Keywords"
			content="Marketing Standard  Management  Marketing Company  Negocio empresa PYME pequeña medianas empresas e-marketing cliente productos actividades de comercialización de venta de mercado de la competitividad Marketing"
		/>
		<meta
			name="subject"
			content="Servicios de Mercadeo, e-marketing e e-business."
		/>
		<link rel="canonical" href="https://marketing-standard.com/negocio.php" />
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
							src="images/frontend/slide-our-business.jpg"
							width="100%"
							alt="Our Business"
						/>

						<div class="slide-h1-cont">
							<h1>Negocio</h1>
						</div>

						<!-- <div class="slide-notices-cont">
                        <div class="slide-notices-bg">
                            <img src="images/frontend/bannertop-notices-icon.png" width="100%" alt="text icon">
                            <marquee SCROLLDELAY=150><p class="text-white pt-reg f-big-x">Our mission is to develop business opportunities in marketing and foreign trade for the SME &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; Our vision is to be an international trade and marketing competitive company, networking in Europe and the Americas</p></marquee>
                        </div>
                    </div> -->
					</div>
				</div>
			</div>

			<div class="row initial-row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="mission-title">
								<img src="images/frontend/ob-mission-es.png" alt="Mision" />
								<p class="mission-text pt-reg txt-gray">
									Desarrollar oportunidades de negocio en el área de mercadeo y
									comercio exterior para la PYME (pequena y mediana empresa) en
									función de satisfacer las necesidades de los mercados en forma
									sostenida y competitiva, generando valor agregado compartido.
								</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<img
								class="mission-diagram"
								src="images/frontend/mission-diagram-es.gif"
								alt="Mision diagram"
							/>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<img
								class="vision-diagram"
								src="images/frontend/vision-diagram-es.gif"
								alt="Vision diagram"
							/>
						</div>

						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="vision-title">
								<img src="images/frontend/ob-vision-es.png" alt="Vision" />
								<p class="mission-text pt-reg txt-gray">
									Ser una empresa competitiva en mercadotecnia y comercio
									internacional, estableciendo redes de comercialización en
									Europa y América, orientada a aportar soluciones creativas que
									sustenten el crecimiento constante del negocio.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- [FOOTER] -->
			<?php
				include	'includes/footer_es.php'
			?>
			<!-- [END FOOTER] -->

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
