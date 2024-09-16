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
		<title>
			Marketing Standard - Web Management & Marketing for SMEs
		</title>
		<meta
			name="description"
			content="Marketing Standard is a specialized web management and marketing company, focusing on web projects, marketing activities, and promotion for clients, with a particular emphasis on serving SMEs (small and medium-sized enterprises)."
		/>
		<meta
			name="keywords"
			content="web management,e-marketing,business,outsourcing,web project,promotion,smes,medium sized enterprises,"
		/>
		<meta
			name="subject"
			content="Servicios de Mercadeo, e-marketing e e-business."
		/>
		<link
			rel="canonical"
			href="https://marketing-standard.com/our-business.php"
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
		include_once 'includes/header.php'
		?>
		<!-- [END HEADER] -->

			<div class="row initial-row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="mission-title">
								<img src="images/frontend/ob-mission.png" alt="Mission" />
								<p class="mission-text pt-reg txt-gray">
									To develop business opportunities in marketing and foreign
									trade for the SME, based on satisfying the needs of the
									markets at a competitive standard, generating shared added
									value.
								</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<img
								class="mission-diagram"
								src="images/frontend/mission-diagram.gif"
								alt="Mission diagram"
							/>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<img
								class="vision-diagram"
								src="images/frontend/vision-diagram.gif"
								alt="Vision diagram"
							/>
						</div>

						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="vision-title">
								<img src="images/frontend/ob-vision.png" alt="Vision" />
								<p class="mission-text pt-reg txt-gray">
									To be an trade and marketing company,  oriented in contributing creative solutions that sustain the growth of our business, allies and our clients.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- [FOOTER] -->
		<?php
            include 'includes/footer.php'
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
