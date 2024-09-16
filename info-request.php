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
			Marketing Standard - INFO REQUEST &amp; FREE QUOTE: Marketing, Design
			&amp; Creativity, Web Design and Development | SEO (Search Optimisation
			Engine) | e-Marketing | Google Solutions.
		</title>
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
			<!-- [HEADER] -->
			<?php
			include_once 'includes/header.php'
			?>
			<!-- [END HEADER] -->
			<div class="row initial-row">
				<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
					<div id="content-center" class="content-center-forms">
						<h1>Info Request &amp; Free Quote</h1>
						<h2 class="visible-xs">
							Get to know more about our proposal, costs, payment terms or
							purchasing, please specify below:<br /><br />
						</h2>

						<h2 class="hidden-xs">
							Get to know more about our proposal, costs, payment <br />terms or
							purchasing, please specify below:<br /><br />
						</h2>

						<div class="inners-cont">
							<form method="post" action="php/recaptchav3.php">
								<div class="request-row">
									<label class="label-forms info-label">Request Type:</label>

									<select name="tipodesolicitud" id="tipodesolicitud" required>
										<option value="Information Request"
											>Information Request</option
										>
										<option value="Free Quote">Free Quote</option>
										<option value="Billing Options">Billing Options</option>
										<option value="Terms">Meting - Purchase</option>
									</select>
								</div>

								<div class="request-row">
									<label class="label-forms info-label">Name:</label>
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
									<label class="label-forms info-label">Company:</label>
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
									<label class="label-forms info-label">Phone:</label>
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
									<label class="label-forms info-label">Confirm Email:</label>
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
								<input type="hidden" name="form" value="request-english" />
								<div class="request-row">
									<!-- <div class="submit-form-info-r pt-bd txt-white f-big-xx"><a href="forms-non-active.html">SEND REQUEST</a></div> -->
									<!--<a href="forms-non-active.html">--><input
										type="submit"
										class="form-submits-button3"
										id="submit"
										value="SEND REQUEST"
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
									<img src="images/frontend/slide-ad-1.jpg" alt="image1" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-2.jpg" alt="image2" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-3.jpg" alt="image3" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-4.jpg" alt="image4" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-5.jpg" alt="image5" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-6.jpg" alt="image6" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-7.jpg" alt="image7" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-8.jpg" alt="image8" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-9.jpg" alt="image9" />
								</li>
								<li>
									<img src="images/frontend/slide-ad-10.jpg" alt="image10" />
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
				include	'includes/footer.php'
			?>
			<!-- [END FOOTER] -->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<footer class="footer-copy f-big">
						© 2023 by Marketing Standard SARL www.marketingstandard.net. - All
						rights reserved.<br />
						Registration company number: DK30756827
					</footer>
				</div>
			</div>
		</div>

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
					$("#error-email").php("Check email confirmation");
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
