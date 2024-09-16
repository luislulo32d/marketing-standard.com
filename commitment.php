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
		<title>Marketing Standard - Commitment</title>
		<meta
			name="description"
			content="Marketing Standard will conduct its business fairly, impartially, in an ethical and proper manner, in accordance with the company's values and Code of Conduct, in full compliance with all laws and regulations."
		/>
		<meta
			name="keywords"
			content="Marketing Standard,  Management,  Marketing Company,  business, SMEs, small,  medium, sized, enterprises, e-marketing, market, commercialization, sales, activities, products, competitiveness, client, Marketing"
		/>
		<meta
			name="subject"
			content="Servicios de Mercadeo, e-marketing e e-business."
		/>
		<link
			rel="canonical"
			href="https://marketing-standard.com/commitment.php"
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
		<div class="slide-home-cont">
						<img
							src="images/frontend/slide-commitment.jpg"
							width="100%"
							alt="Commitment"
						/>

						<div class="slide-h1-cont">
							<h1>commitment</h1>
						</div>

						<!-- <div class="slide-notices-cont">
                        <div class="slide-notices-bg">
                            <img src="images/frontend/bannertop-notices-icon.png" width="100%" alt="text icon">
                            <marquee SCROLLDELAY=150><p class="text-white pt-reg f-big-x">We will conduct its business fairly, impartially, in an ethical and proper manner &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; We work in full compliance with all laws and regulations. &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; Integrity must underlie all company relationships, including those with customers, suppliers, and communities and among employees</p></marquee>
                        </div>
                    </div> -->
					</div>
				</div>
			</div>
			<div class="row initial-row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="banner-top-desc-cont">
						<img
							src="images/frontend/commitment-bartopbg.png"
							alt="bar bg"
							class="graybanner-top-bg"
						/>

						<div class="banner-top-aboutus-h2cont">
							<h2 class="h2-about-us pt-reg f-bigger-s">
								<br />
								We ensure impartiality, upholding the best business practices
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="row initial-row">
				<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 hidden-xs">
							<img
								src="images/frontend/commitment-thumbsup.jpg"
								alt="Great!"
								class="commitment-thumbs-up"
							/>
						</div>

						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<div class="commitment-texttop">
								<p class="pt-reg txt-gray">
									<b>Marketing Standard</b> will conduct its business fairly,
									impartially, in an ethical and proper manner, in accordance
									with the company's values and <i>Code of Conduct</i>, in full
									compliance with all laws and regulations.
								</p>
								<br /><br />

								<p class="pt-regi txt-gray">
									<img
										src="images/frontend/quotes-open.png"
										alt="Quotes open"
										width="5%"
										style="vertical-align: text-bottom;"
									/>
									In the course of conducting company business,<br />
									&nbsp; &nbsp; &nbsp; &nbsp; integrity must underlie all
									company relationships,<br />
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; including those with
									customers, suppliers, and<br />
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									&nbsp;communities and among employees.
									<img
										src="images/frontend/quotes-close.png"
										alt="Quotes close"
										width="5%"
										style="vertical-align: text-bottom;"
									/>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
					<div id="right-column">
						<div class="clients-banner">
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

		<script
			type="text/javascript"
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"
		></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
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
