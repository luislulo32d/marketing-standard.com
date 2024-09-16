<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta content="all" name="robots" />
		<meta content="7 days" name="revisit-after" />
		<meta
			content="Marketing Standard, info@marketing-standard.comdk"
			name="author"
		/>
		<meta content="Marketing Standard" name="designer" />
		<meta name="robots" content="index, follow" />
		<title>Marketing Standard - Dossier - Miss World</title>
		<meta
			name="Description"
			content="Hemos desarrollado proyectos en diversos sectores, abarcando desde la concepción de un producto hasta el lanzamiento de nuevos productos al mercado. Para una mejor idea, estas son algunas de las principales áreas que hemos desarrollado: "
		/>
		<meta
			name="Keywords"
			content="Marketing Standard, proyectos, productos, lanzamiento, mercado"
		/>
		<meta
			name="subject"
			content="Servicios de Mercadeo, e-marketing, e-business."
		/>
		<link rel="canonical" href="https://marketing-standard.com/proyectos.php" />
		<!-- [LINKS] -->
		<?php
			include_once 'includes/link.php'
		?>
		<!-- [END LINKS] -->
	</head>

	<body>
		<!-- [HEADER] -->
		<?php
		include_once 'includes/header_es.php'
		?>
		<!-- [END HEADER] -->
					<div class="slide-home-cont">
						<img
							src="images/frontend/slide-projects.jpg"
							width="100%"
							alt="Projects"
						/>

						<div class="slide-h1-cont">
							<h1>Dossier</h1>
						</div>

						<!-- <div class="slide-notices-cont">
                        <div class="slide-notices-bg">
                            <img src="images/frontend/bannertop-notices-icon.png" width="100%" alt="text icon">
                            <marquee SCROLLDELAY=150><p class="text-white pt-reg f-big-x">Follow up French Opportunities II &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; Follow up French Opportunities II &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; Follow up French Opportunities II</p></marquee>
                        </div>
                    </div> -->
					</div>
				</div>
			</div>

			<div class="row initial-row" style="margin-bottom: 50px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="twocolumns-cont" style="margin-top: 5%;">
						<h2>Te invitamos a consultar nuestro dossier de proyectos:</h2>
						<br />
						<div class="row">
							<div class="col-xs-4 col-sm-5 col-md-5 col-lg-5">
								&nbsp;
							</div>

							<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
								<div class="dossier-cont">
									<a href="pdf/dossier-malaga-rural.pdf" target="_blank">
										<img
											src="images/frontend/dossier-malaga-rural.png"
											alt="Dossier"
										/>
										<p class="txt-center pt-regi f-big">Dossier Málaga Rural</p>
									</a>
								</div>
							</div>

							<div class="col-xs-4 col-sm-5 col-md-5 col-lg-5">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- [FOOTER] -->
		<?php
		include_once 'includes/footer_es.php'
		?>
		<!-- [END FOOTER] -->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<footer class="footer-copy f-big">
						<a href="https://www.marketing-standard.com"
							>Websites, e-Marketing Services, Google Ranking & SEO © 2023 by
							Marketing Standard www.marketingstandard.net. - Todos los derechos
							reservados.<br />
							Número Europeo de registro de empresa: DK30756827</a
						>
					</footer>
				</div>
			</div>
		</div>

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

		<script src="js/jquery.placeholder.js"></script>
		<script>
			// To test the @id toggling on password inputs in browsers that don’t support changing an input’s @type dynamically (e.g. Firefox 3.6 or IE), uncomment this:
			// $.fn.hide = function() { return this; }
			// Then uncomment the last rule in the <style> element (in the <head>).
			$(function () {
				// Invoke the plugin
				$("input, textarea").placeholder();
				// That’s it, really.
				// Now display a message if the browser supports placeholder natively
				var html;
				if ($.fn.placeholder.input && $.fn.placeholder.textarea) {
				} else if ($.fn.placeholder.input) {
				}
				if (html) {
					$('<p class="note">' + html + "</p>").insertAfter("form");
				}
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
