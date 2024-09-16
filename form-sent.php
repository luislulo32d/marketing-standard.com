<!DOCTYPE html>
<html lang="en">
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
		<title>Marketing Standard - Form Sent</title>
		<meta
			name="description"
			content="Marketing Standard | INFO REQUEST AND FREE QUOTE: Marketing (Research, planming & strategies) | Design & Creativity (Logo, banners, e-catalogs, corporate manual) | Web Design and Development (Plans | Webs ready to use) | SEO (Search Optimisation Engine) | Social Media Optimization (SMO) | e-Marketing (Promotion programs) | Dynamics Websites (Self|management websites)"
		/>
		<meta
			name="keywords"
			content="request,free quote,purchasing,marketing,research,planming,strategies,design,creativity,logo,banners,e-catalogs,corporate manual,web design,development,plans,ready to use,seo,search engine optimization,social media optimization,smo,e-marketing,crm"
		/>
		<meta
			name="subject"
			content="Servicios de Mercadeo, e-marketing e e-business."
		/>
		<link
			rel="canonical"
			href="https://marketing-standard.com/info-request.php"
		/>
		<!-- [LINKS] -->
		<?php
			include_once 'includes/link.php'
		?>
		<!-- [END LINKS] -->
	</head>

	<body>
		<div class="container msdk">
			<!-- [HEADER] -->
		<?php
		include_once 'includes/header.php'
		?>
		<!-- [END HEADER] -->

			<div class="row initial-row">
				<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
					<div id="content-center">
						<h1>Form sent correctly</h1>
						<h2>Thank you for contacting us, we will answer you soon!</h2>
					</div>
				</div>

				<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
					<div id="right-column">
						<div class="salespromotion-banner">
							<a href="e-marketing.php"
								><img
									src="images/frontend/rightcolumn-salespromotion-websupport.png"
									alt="Sales and Promotion Management"
									class="salespromotion-about-us"
							/></a>
						</div>
					</div>
				</div>
			</div>

			<!-- [FOOTER] -->
			<?php
				include	'includes/footer.php'
			?>
			<!-- [END FOOTER] -->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<footer class="footer-copy f-big">
						Websites, e-Marketing Services, Google Ranking & SEO © 20233 by
						Marketing Standard www.marketingstandard.net. - All rights
						reserved.<br />
						Registration company number: DK30756827
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
