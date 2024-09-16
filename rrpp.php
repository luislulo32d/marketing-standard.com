<!DOCTYPE html>
<html lang="en">
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="all" name="robots" />
		<meta content="7 days" name="revisit-after" />
		<meta
			content="Marketing Standard.net, Marketing-standard.com"
			name="author"
		/>
		<meta content="Marketing Standard" name="designer" />
		<meta content="noindex, nofollow" name="robots" />
		<title>Marketing Standard | Public Relationships</title>
		<meta
			content="News about Public Relationships and online Marketing"
			name="description"
		/>
		<meta
			content="Presentation, Promotion, Sales, Internet,Public Relationships, denmark, france, EEUU, blog"
			name="keywords"
		/>
		<meta
			content="Servicios de Mercadeo, e-marketing e e-business."
			name="subject"
		/>

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

			<div class="row initial-row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="banner-top-desc-cont">
						<img
							alt="bar bg"
							class="graybanner-top-bg"
							src="images/frontend/pr-bartopbg.png"
						/>
						<div class="banner-top-aboutus-h2cont">
							<h2 class="h2-about-us pt-reg f-bigger-s">
								Noticias acerca de<br />
								<b>Relaciones P&uacute;blicas y Marketing Online</b>
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="row initial-row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="pprr-row">
						<img
							alt="Banner left"
							src="images/frontend/pprr-blog-img1.jpg"
							width="100%"
						/>
						<div class="pprr-row-right">
							<p class="f-bigger-s txt-dgray pt-bd">
								Seguimiento Franc&eacute;s Oportunidades II
							</p>
							&nbsp;

							<p class="f-bigger txt-gray pt-reg">
								Seg&uacute;n lo prometido, se adjunta la lista de los
								participantes al evento Oportunidades franceses - daneses
								Oportunidades de negocio en el mercado franc&eacute;s, el 24 de
								septiembre.
							</p>
						</div>

						<div class="pprr-row-morebtn f-bigger txt-center">
							<a href="pprr-follow-up-french-opportunities.php" target="_self"
								><b>+</b>Leer m&aacute;s</a
							>
						</div>
					</div>

					<div class="pprr-row">
						<div class="pprr-row-divider"></div>
					</div>

					<div class="pprr-row">
						<img
							alt="Banner left"
							src="images/frontend/pprr-blog-img2.jpg"
							width="100%"
						/>
						<div class="pprr-row-right">
							<p class="f-bigger-s txt-dgray pt-bd">
								Seguimiento Franc&eacute;s Oportunidades II
							</p>
							&nbsp;

							<p class="f-bigger txt-gray pt-reg">
								Seg&uacute;n lo prometido, se adjunta la lista de los
								participantes al evento Oportunidades franceses - daneses
								Oportunidades de negocio en el mercado franc&eacute;s, el 24 de
								septiembre.
							</p>
						</div>

						<div class="pprr-row-morebtn f-bigger txt-center">
							<a href="pprr-follow-up-french-opportunities.php" target="_self"
								><b>+</b>Leer m&aacute;s</a
							>
						</div>
					</div>
				</div>
			</div>

			<!-- [FOOTER] -->
			<?php
				include	'includes/footer_es.php'
			?>
			<!-- [END FOOTER] -->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<footer class="footer-copy f-big">
						Websites, e-Marketing Services, Google Ranking &amp; SEO &copy; 2016
						by Marketing Standard www.marketingstandard.net. - Todos los
						derechos reservados.<br />
						N&uacute;mero Europeo de registro de empresa: DK30756827
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
	</body>
</html>
