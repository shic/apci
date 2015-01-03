
<?php
/* */
require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
});

?>


<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#"
	xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-it" lang="it-it"
	dir="ltr">
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--<base href="/" /> -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="startup, start, up, innovation, innovazione, investitori, imprenditoria, imprenditore, idea, corso, pitch" />
<meta name="description"
	content="意大利华人专业人士协会 è il primo corso che ti permette di portare la tua idea davanti a degli investitori" />
<meta name="generator"
	content="Joomla! - Open Source Content Management" />
<title>意大利华人专业人士协会</title>
<link href="templates/boxme/favicon.ico" rel="shortcut icon"
	type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="components/com_k2/css/k2.css"
	type="text/css" />
<link rel="stylesheet"
	href="media/coalawebsocial/modules/likebox/css/cwl-default.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/flexslider.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/camera.css"
	type="text/css" />
<link rel="stylesheet"
	href="templates/boxme/css/nivo-themes/default/default.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/nivo-slider.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/elastic.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/jquery.kwicks.min.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/bootstrap.min.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/main.css"
	type="text/css" />
<link rel="stylesheet" href="templates/boxme/css/boxme.responsive.css"
	type="text/css" />
<link rel="stylesheet"
	href="templates/boxme/css/style.php?color1=cd3a27&color2=232323&color3=232323"
	type="text/css" />
<link rel="stylesheet" href="modules/mod_dmt_social/css/dmt_social.css"
	type="text/css" />
<link rel="stylesheet"
	href="media/com_uniterevolution/assets/rs-plugin/css/settings.css"
	type="text/css" />
<link rel="stylesheet"
	href="media/com_uniterevolution/assets/rs-plugin/css/captions.css"
	type="text/css" />
<link rel="stylesheet" href="media/mod_falang/css/template.css"
	type="text/css" />
<style type="text/css">
#likebox-wrapper * {
	min-width: 200px;
}

.fb-comments, .fb-comments span, .fb-comments iframe[style],
	.fb-comments iframe span[style], .fb-like-box, .fb-like-box span,
	.fb-like-box iframe[style], .fb-like-box iframe span[style] {
	min-width: 200px;
}
</style>
<script src="media/system/js/mootools-core.js" type="text/javascript"></script>
<script src="media/system/js/core.js" type="text/javascript"></script>
<script src="media/jui/js/jquery.min.js" type="text/javascript"></script>
<script src="media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
<script src="components/com_k2/js/k2.js?v2.6.7&amp;sitepath=/"
	type="text/javascript"></script>
<script src="media/system/js/mootools-more.js" type="text/javascript"></script>
<script src="templates/boxme/js/vendor/bootstrap.min.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/retina-1.1.0.min.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/hoverIntent.js" type="text/javascript"></script>
<script src="templates/boxme/js/superfish.min.js" type="text/javascript"></script>
<script src="templates/boxme/js/supersubs.js" type="text/javascript"></script>
<script src="templates/boxme/js/jquery.carouFredSel.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.prettyPhoto.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.smint.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"
	type="text/javascript"></script>
<script src="plugins/system/shinetheme/assets/js/jquery.ui.map.min.js"
	type="text/javascript"></script>
<script src="plugins/system/shinetheme/assets/js/jquery.validate.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.parallax-1.1.3.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.isotope.min.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/excanvas.js" type="text/javascript"></script>
<script src="templates/boxme/js/jquery.easy-pie-chart.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.flexslider-min.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.eislideshow.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.easing.1.3.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/camera.min.js" type="text/javascript"></script>
<script src="templates/boxme/js/jquery.nivo.slider.pack.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/jquery.kwicks.min.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/responsive-nav.min.js"
	type="text/javascript"></script>
<script src="templates/boxme/js/main.js" type="text/javascript"></script>
<script
	src="media/com_uniterevolution/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"
	type="text/javascript"></script>
<script
	src="media/com_uniterevolution/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"
	type="text/javascript"></script>









<!-- Schema.org markup for Google+ -->


<meta itemprop="name" content="意大利华人专业人士协会">


<meta itemprop="description"
	content="意大利华人专业人士协会 è il primo corso che ti permette di portare la tua idea davanti agli investitori">


<meta itemprop="image" content="/logo.jpg">





<!-- Twitter Card data -->


<meta name="twitter:card" content="summary">


<meta name="twitter:creator" content="@innovlab">


<meta name="twitter:url" content="http://www.apci-italia.it/">


<meta name="twitter:title" content="意大利华人专业人士协会">


<meta name="twitter:description"
	content="意大利华人专业人士协会 è il primo corso che ti permette di portare la tua idea davanti agli investitori">


<meta name="twitter:image" content="/logo.jpg">





<!-- Open Graph data -->


<meta property="og:locale" content="it_IT" />


<meta property="og:type" content="article" />


<meta property="og:title" content="意大利华人专业人士协会" />


<meta property="og:description"
	content="意大利华人专业人士协会 è il primo corso che ti permette di portare la tua idea davanti agli investitori" />


<meta property="og:image" content="/logo.jpg" />


<meta property="og:url" content="http://www.apci-italia.it/" />




<!-- Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
                                             <script src="templates/boxme/js/respond.min.js"></script>
                                             <![endif]-->

<script type="text/javascript">
                                                var _gaq = _gaq || [];
                                                _gaq.push(['_setAccount', 'UA-48209536-1']);
                                                _gaq.push(['_trackPageview']);
                                                (function () {
                                                    var ga = document.createElement('script');
                                                    ga.type = 'text/javascript';
                                                    ga.async = true;
                                                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                                    var s = document.getElementsByTagName('script')[0];
                                                    s.parentNode.insertBefore(ga, s);
                                                })();
                                            </script>
</head>

<body class="">
	<div id="wrapper">
		<header class="soci-header">
			<div id="head-box" class="style2 ">
				<div class="head-social-box">
					<div class="container clearfix pos-center">
						<div class="pull-right">

							<ul class="dmt-social-links dmt-icons-16">
								<li class="facebook"><a title="Facebook" rel="me nofollow"
									href="http://www.facebook.com/InnovActionLab" target="_blank">
										<img src="modules/mod_dmt_social/icons/facebook_16.png" alt="" />
								</a></li>
								<li class="twitter"><a title="Twitter" rel="me nofollow"
									href="http://www.twitter.com/#!/innovlab" target="_blank"> <img
										src="modules/mod_dmt_social/icons/twitter_16.png" alt="" />
								</a></li>
								<li class="google_wave"><a title="Google+" rel="me nofollow"
									href="https://plus.google.com/100340691659587836437"
									target="_blank"> <img
										src="modules/mod_dmt_social/icons/google_wave_16.png" alt="" />
								</a></li>
								<li class="linkedin"><a title="LinkedIn" rel="me nofollow"
									href="http://www.linkedin.com/company/innovaction-lab"
									target="_blank"> <img
										src="modules/mod_dmt_social/icons/linkedin_16.png" alt="" />
								</a></li>
								<li class="youtube"><a title="YouTube" rel="me nofollow"
									href="http://www.youtube.com/user/InnovActionLab"
									target="_blank"> <img
										src="modules/mod_dmt_social/icons/youtube_16.png" alt="" />
								</a></li>


							</ul>
							<div class="mod-languages">

								<ul class="lang-inline">

									<!-- >>> [FREE] >>> -->
									<!-- <<< [FREE] <<< -->

									<!-- >>> [FREE] >>> -->
									<li class="" dir="ltr"><a href="/en/"> <img
											src="media/mod_falang/images/en.gif" alt="English (UK)"
											title="English (UK)" />
									</a></li>
									<!-- <<< [FREE] <<< -->
								</ul>

							</div>

						</div>
					</div>
				</div>
				<div class="container">
					<div class="header-wrapper margint10">
						<div class="pull-left logo">
							<a href="/"><img src="templates/boxme/images/logo.png"
								class="img-responsive logo-image" alt="BoxMe!" /></a>
						</div>
						<div class="pull-right menu">
							<nav class="pull-left menu-bar" id="responsive-menu">
								<ul id="site-menu" class="site-menu">
									<li class="item-201 current active"><a class="active"
										href="/it/">主页</a></li>
									<li class="item-196"><a class="" href="/it/chi-siamo.html">关于我们</a></li>
									<li class="item-202"><a class="" href="/it/lab-2015.html">米兰世博会</a></li>
									<li class="item-237 deeper parent"><a href="#stop">活动介绍</a>
										<ul class="nav-child unstyled small">
											<li class="item-203"><a class=""
												href="/it/edizioni-precedenti/lab.html">过往活动</a></li>
											<li class="item-204"><a href="/it/finale-2013.html">即将进行</a></li>
										</ul></li>
									<li class="item-205"><a class="" href="/itmedia-social.html">媒体</a></li>
									<li class="item-206"><a class="" href="/it/blog.html">Blog</a></li>
									<li class="item-207"><a class="" href="/it/alumni.html">Alumni</a></li>
									<li class="item-242"><a class="" href="/it/live.html">LIVE</a></li>
								</ul>

							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>


		<div id="slideshow">


			<!-- START REVOLUTION SLIDER ver. 2.2.1 -->

			<div id="rev_slider_8_1_wrapper"
				class="rev_slider_wrapper fullwidthbanner-container"
				style="margin: 0px auto; background-color: #E9E9E9; padding: 0px; margin-top: 0px; margin-bottom: 0px; max-height: 500px; direction: ltr;">
				<div id="rev_slider_8_1" class="rev_slider fullwidthabanner"
					style="display: none; max-height: 500px; height: 500px;">
					<ul>

						<li data-transition="fade" data-slotamount="7"
							data-masterspeed="300"><img src="images/slider_web.jpg" alt="" />


							<div class="tp-caption rev-slider-title-nobackground fade"
								data-x="5" data-y="293" data-speed="300" data-start="1200"
								data-easing="easeOutExpo">#Call4InnLab</div>


							<div class="tp-caption rev-slider-title-nobackground fade"
								data-x="3" data-y="112" data-speed="300" data-start="500"
								data-easing="easeOutExpo">ROMA E MILANO 2015</div>


							<div class="tp-caption rev-slider-button fade" data-x="8"
								data-y="401" data-speed="300" data-start="1500"
								data-easing="easeOutExpo">
								<div class="bigbutton-place">
									<a href="/lab-2015.html" class="bigbutton bigbutton2"
										target="tag">加入我们</a>
								</div>
							</div>


							<div class="tp-caption rev-slider-title-nobackground fade"
								data-x="5" data-y="178" data-speed="300" data-start="800"
								data-easing="easeOutExpo">意大利华人专业人士协会</div></li>
					</ul>
				</div>
			</div>
	<!-- 
			<script type="text/javascript">

                                                            var tpj = jQuery;


                                                            var revapi8;

                                                            tpj(document).ready(function () {

                                                                if (tpj.fn.cssOriginal != undefined)
                                                                    tpj.fn.css = tpj.fn.cssOriginal;

                                                                if (tpj('#rev_slider_8_1').revolution == undefined)
                                                                    revslider_showDoubleJqueryError('#rev_slider_8_1', "joomla");
                                                                else
                                                                    revapi8 = tpj('#rev_slider_8_1').show().revolution(
                                                                            {
                                                                                delay: 10000,
                                                                                startwidth: 1140,
                                                                                startheight: 500,
                                                                                hideThumbs: 200,
                                                                                thumbWidth: 100,
                                                                                thumbHeight: 50,
                                                                                thumbAmount: 1,
                                                                                navigationType: "none",
                                                                                navigationArrows: "verticalcentered",
                                                                                navigationStyle: "round",
                                                                                touchenabled: "on",
                                                                                onHoverStop: "off",
                                                                                shadow: 0,
                                                                                fullWidth: "on",
                                                                                navigationHAlign: "center",
                                                                                navigationVAlign: "bottom",
                                                                                navigationHOffset: 0,
                                                                                navigationVOffset: 20,
                                                                                stopLoop: "off",
                                                                                stopAfterLoops: -1,
                                                                                stopAtSlide: -1,
                                                                                shuffle: "off",
                                                                                hideSliderAtLimit: 0,
                                                                                hideCaptionAtLimit: 0,
                                                                                hideAllCaptionAtLilmit: 0});

                                                            });	//ready

            </script>

		END REVOLUTION SLIDER -->

		</div>



		<div id="component">
			<div class="container">

				<div id="system-message-container">
					<div id="system-message"></div>
				</div>
			</div>

			<div class="container">
				<div class='st-divider ' style='padding: 20px 0; border: none;'></div>
			</div>
			<div class="container">
				<div class="st-module module" id="Mod231">
					<div class="module-inner">
						<div class="module-ct">

							<div id="k2ModuleBox231" class="k2ItemsBlock">


								<ul>
									<li class="even lastItem">
										<!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




										<!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

										<!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

										<div class="moduleItemIntrotext">

											<h1>INNOVACTIONLAB È IL PRIMO</h1>
											<h1>CORSO CHE TI PERMETTE DI PORTARE</h1>
											<h1>LA TUA IDEA DAVANTI AGLI</h1>
											<h1>INVESTITORI.</h1>
											<p></p>
										</div>


										<div class="clr"></div>

										<div class="moduleItemVideo">
											<span class="moduleItemVideoCaption"></span> <span
												class="moduleItemVideoCredits"></span>
										</div>

										<div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

										<!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

										<!-- K2 Plugins: K2AfterDisplay -->

										<div class="clr"></div>
									</li>
									<li class="clearList"></li>
								</ul>



							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="st-module module" id="Mod128">
					<div class="module-inner">
						<div class="module-ct">

							<div id="k2ModuleBox128" class="k2ItemsBlock">


								<ul>
									<li class="even lastItem">
										<!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




										<!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

										<!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

										<div class="moduleItemIntrotext">

											<div class="col-lg-4" style="margin-bottom: 35px;">
												<h3 style="line-height: 15.8079996109009px;">
													<img src="images/firstIcon.png" alt=""
														style="margin-right: 15px; height: 35px;" /><span
														style="line-height: 1.3em;">LO SCOPO</span>
												</h3>
												<br />
												<p class="margint10">Aiutare, principalmente i giovani che
													sono nel mondo delle università, ad acquisire le capacità
													necessarie a comprendere il potenziale di mercato di un
													progetto innovativo e come presentare tale progetto in modo
													efficace a fondi di investimento di venture capital.</p>
											</div>
											<div class="col-lg-4" style="margin-bottom: 35px;">
												<h3>
													<img src="images/secondIcon.png" alt=""
														style="margin-right: 15px; height: 35px;" />COME SI
													SOSTIENE
												</h3>
												<br />
												<p class="margint10">I corsi di 意大利华人专业人士协会 sono del tutto
													gratuiti per i partecipanti. L’associazione è sostenuta da
													partner e sponsor che decidono di sostenere l’iniziativa
													perché credono nel potenziale di crescita dei ragazzi
													italiani e nella necessità di avvicinare concretamente i
													giovani al mondo delle imprese.</p>
											</div>
											<div class="col-lg-4" style="margin-bottom: 35px;">
												<h3>
													<img src="images/thirdIcon.png" alt=""
														style="margin-right: 15px; height: 35px;" />APPROCCIO
												</h3>
												<br />
												<p class="margint10">L'approccio formativo proposto da
													意大利华人专业人士协会 è del tutto originale: agli studenti vengono
													presentati dei problemi tipici di chi fonda una startup
													(dalla costituzione del team, che deve essere
													obbligatoriamente multidisciplinare, alla presentazione ai
													fondi di venture capital), riducendo al minimo le
													indicazioni su come tali problemi possano essere risolti e
													usando, invece, un approccio a forte impatto emotivo che
													punta al coinvolgimento motivazionale degli studenti.</p>
											</div>
											<div class="col-lg-4" style="margin-bottom: 30px;">
												<img src="images/iconAddition.png" alt=""
													style="height: 35px; float: right;" />
											</div>


											<div class="col-lg-6" style="margin-bottom: 30px;">
												<h3>
													<img src="images/resultIcon.png" alt=""
														style="margin-right: 10px; height: 35px;" />RISULTATI
												</h3>
												<br />
												<p class="margint10">意大利华人专业人士协会 è considerato uno dei 5
													casi di maggior successo mondiale nel campo della
													formazione imprenditoriale. Nel corso dei suoi 3 anni di
													attività, dal 2011 ad oggi, ha dato vita ad oltre 30
													startup finanziate da investitori privati e fondi di
													investimento di venture capital.</p>
											</div>
										</div>


										<div class="clr"></div>

										<div class="moduleItemVideo">
											<span class="moduleItemVideoCaption"></span> <span
												class="moduleItemVideoCredits"></span>
										</div>

										<div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

										<!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

										<!-- K2 Plugins: K2AfterDisplay -->

										<div class="clr"></div>
									</li>
									<li class="clearList"></li>
								</ul>



							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-grey">
				<div class="container">
					<div class="st-module module" id="Mod205">
						<div class="module-inner">
							<div class="module-ct">
								<div class="custom">
									<p></p>
									<p></p>
									<center>
										<h1>CON IL SUPPORTO DI</h1>
									</center>
									<p></p>
									<div class="col-lg-6 col-sm-6">
										<a href="https://www.jpmorgan.com" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/jpmorgan-home.png" alt="" /></a>
									</div>
									<div class="col-lg-6 col-sm-6">
										<a
											href="http://www.microsoft.com/about/corporatecitizenship/en-us/youthspark/"
											target="_blank"> <img class="img-responsive"
											src="images/supporter/microsoft-home.png" alt=""
											style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
										<a href="http://www.fondazionecariplo.it/" target="_self"> <img
											class="img-responsive"
											src="images/supporter/cariplo-home.png" alt=""
											style="float: left; margin-right: 30px; padding-top: 15px;" /></a>
										<a href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a>
									</div>
									<p></p>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="st-module module" id="Mod271">
					<div class="module-inner">
						<div class="module-ct">


							<div class="custom">
								<div style="text-align: center;">
									<h1>
										<br />BENVENUTI
									</h1>
									<p style="margin-bottom: 20px;">OGNI ANNO UN GRUPPO DI ALUNNI
										AFFRONTA UNA DELLE SFIDE PIU’ DIFFICILI DELLA SUA ESISTENZA
										QUELLA CHE VI RACCONTEREMO E’ LA CARICATURA DI TUTTO CIO’ CHE
										PUO’ SUCCEDERE</p>
									<div class="video-container">
										<iframe src="http://www.youtube.com/embed/5zcrRaTbT3o"
											frameborder="0" width="560" height="315"></iframe>
									</div>
									<div class="st-divider " style="padding: 50px 0; border: none;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<div class="st-module module" id="Mod234">
					<div class="module-inner">
						<div class="module-ct">

							<div id="k2ModuleBox234" class="k2ItemsBlock">

								<div class="moduleItemIntrotext">

									<center>
										<h1 style="margin-top: 60px;">I NOSTRI MENTOR</h1>
										<p>OGNI TEAM DI INNOVACTION LAB E' SUPPORTATO DA UN
											PROFESSIONISTA ESPERTO</p>
									</center>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>







			<div class="container-grey">
				<div class="container">
					<div class="st-module module" id="Mod205">
						<div class="module-inner">
							<div class="module-ct">
								<div class="custom">
									<p></p>
									<p></p>
									<center>
										<h1>CON IL SUPPORTO DI</h1>
									</center>
									<p></p>

									<div class="col-lg-6 col-sm-6">

										<a href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a> <a
											href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a> <a
											href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a> <a
											href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a> <a
											href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a> <a
											href="http://www.worldwiderome.it/" target="_blank"> <img
											class="img-responsive"
											src="images/supporter/worldwideweb-home.png" alt=""
											style="float: left; margin-right: 10px;" /></a> <a
											href="/index.php/chi-siamo#testimonial"> <img
											src="media/k2/items/cache/d382bd8ae87d9139df6458192532657c_M.jpg"
											alt="ANTONELLO SCANO" class="testimonial-image"
											style="width: 50px; float: left; margin-right: 30px; padding-top: 15px;" /></a>


									</div>
									<p></p>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>





			<div class="container-grey">
				<div class="container">

					<center>
						<h1 style="padding-top: 60px;"></h1>
						<center>
							<center>
								<p class="margint20"
									style="font-family: HelveticaNeueLTCom45Light; font-size: 16px; text-transform: uppercase; max-width: 850px;">
								</p>
							</center>
							<ul class="prtfl-list">

								<li>
									<center>
										<a href="/index.php/chi-siamo#testimonial"><img
											src="media/k2/items/cache/d382bd8ae87d9139df6458192532657c_M.jpg"
											alt="ANTONELLO SCANO" class="testimonial-image"
											style="width: 100px" /></a>
										<p class="testimonial-title margint10 testimonial-text-home">ANTONELLO
											SCANO</p>
									</center>
								</li>
								<li>
									<center>
										<a href="/index.php/chi-siamo#testimonial"><img
											src="media/k2/items/cache/e17bf28887a04e7713039bc3ae638d41_M.jpg"
											alt="GIUSEPPE LITTERA" class="testimonial-image"
											style="width: 100px" /></a>
									</center>
								</li>
								<li>
									<center>
										<a href="/index.php/chi-siamo#testimonial"><img
											src="media/k2/items/cache/3f670763861139bf2201e7bc224257d4_M.jpg"
											alt="MATTEO STIFANELLI" class="testimonial-image"
											style="width: 100px" /></a>
										<p class="testimonial-title margint10 testimonial-text-home">MATTEO
											STIFANELLI</p>
									</center>
								</li>
								<li>
									<center>
										<a href="/index.php/chi-siamo#testimonial"><img
											src="media/k2/items/cache/8c4e7ddecfb739ef5c33c55621b27630_M.jpg"
											alt="MATTEO LAI" class="testimonial-image"
											style="width: 100px" /></a>
										<p class="testimonial-title margint10 testimonial-text-home">MATTEO
											LAI</p>
									</center>
								</li>
							</ul>

							<ul class="prtfl-list-controller margint40 clearfix"
								style="margin-left: 0; margin-right: 0; margin-bottom: 60px;">
								<li><a id="prev" href="/"><i class="icon-angle-left"></i></a></li>
								<li><div class="bigbutton-place">
										<a href="/index.php/chi-siamo#testimonial" class="events-link"
											style="font-size: 23px; color: #fff !important;">SCOPRILI
											TUTTI</a>
									</div></li>
								<li><a id="next" href="/"><i class="icon-angle-right"></i></a></li>
							</ul>
				
				</div>

			</div>
		</div>
		<!-- nessun filtro -->


		<div class="editions-area">
			<div class="st-divider " style="padding: 30px 0; border: none;"></div>
			<center>
				<h1>EDIZIONI PRECEDENTI</h1>
			</center>
			<div class="st-divider " style="padding: 20px 0; border: none;"></div>

			<div class="container">
				<div class="row portfolio-box">
					<div class="col-lg-4 col-sm-4 item ">
						<div class="catItemView blog-box groupLeading">
							<div class="blg-img-box">
								<img
									src="media/k2/items/cache/5cf9cad94714c5577919c266171d935c_L.jpg"
									alt="Lazio" style="width: 100%; height: auto;">
								<div class="mask">
									<div class="prt-lnk-wrppr editions-link clearfix">
										<div class="pull-left editions-popup popup">
											<a href="/index.php/lazio-2013"><h2>&nbsp;</h2></a>
										</div>
									</div>
								</div>
							</div>
							<div class="editions-legend clearfix">
								<a href="/index.php/lazio-2013">Lazio</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 item ">
						<div class="catItemView blog-box groupLeading">
							<div class="blg-img-box">
								<img
									src="media/k2/items/cache/47674e109b85ae6495880f2604f34f58_L.jpg"
									alt="Trentino" style="width: 100%; height: auto;">
								<div class="mask">
									<div class="prt-lnk-wrppr editions-link clearfix">
										<div class="pull-left editions-popup popup">
											<a href="/index.php/trentino-2013"><h2>&nbsp;</h2></a>
										</div>
									</div>
								</div>
							</div>
							<div class="editions-legend clearfix">
								<a href="/index.php/trentino-2013">Trentino</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 item ">
						<div class="catItemView blog-box groupLeading">
							<div class="blg-img-box">
								<img
									src="media/k2/items/cache/7acce66d40ec90c2d61987b409cbf850_L.jpg"
									alt="Sardegna" style="width: 100%; height: auto;">
								<div class="mask">
									<div class="prt-lnk-wrppr editions-link clearfix">
										<div class="pull-left editions-popup popup">
											<a href="/index.php/sardegna-2013"><h2>&nbsp;</h2></a>
										</div>
									</div>
								</div>
							</div>
							<div class="editions-legend clearfix">
								<a href="/index.php/sardegna-2013">Sardegna</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 item ">
						<div class="catItemView blog-box groupLeading">
							<div class="blg-img-box">
								<img
									src="media/k2/items/cache/461011bcaf5b5e723e897c33f049f169_L.jpg"
									alt="Puglia" style="width: 100%; height: auto;">
								<div class="mask">
									<div class="prt-lnk-wrppr editions-link clearfix">
										<div class="pull-left editions-popup popup">
											<a href="/index.php/puglia-2011"><h2>&nbsp;</h2></a>
										</div>
									</div>
								</div>
							</div>
							<div class="editions-legend clearfix">
								<a href="/index.php/puglia-2011">Puglia</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 item ">
						<div class="catItemView blog-box groupLeading">
							<div class="blg-img-box">
								<img
									src="media/k2/items/cache/ee68a9df1200997b07be8fb0bbdb9f29_L.jpg"
									alt="Emilia Romagna" style="width: 100%; height: auto;">
								<div class="mask">
									<div class="prt-lnk-wrppr editions-link clearfix">
										<div class="pull-left editions-popup popup">
											<a href="/index.php/emilia-2011"><h2>&nbsp;</h2></a>
										</div>
									</div>
								</div>
							</div>
							<div class="editions-legend clearfix">
								<a href="/index.php/emilia-2011">Emilia Romagna</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 item ">
						<div class="catItemView blog-box groupLeading">
							<div class="blg-img-box">
								<img
									src="media/k2/items/cache/da8a96cfc8ca1dd33bc42677c8b9c7c6_L.jpg"
									alt="InnovAction Camp" style="width: 100%; height: auto;">
								<div class="mask">
									<div class="prt-lnk-wrppr editions-link clearfix">
										<div class="pull-left editions-popup popup">
											<a href="/index.php/camp-2013"><h2>&nbsp;</h2></a>
										</div>
									</div>
								</div>
							</div>
							<div class="editions-legend clearfix">
								<a href="/index.php/camp-2013">InnovAction Camp</a>
							</div>
							<div class="clr"></div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- nessun filtro -->

		<div class="container">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<h1 style="text-align: center;">SOCIAL MEDIA</h1>
			<p>&nbsp;</p>
		</div>
		<div class="container" style="padding: 0px !important">
			<div class='row'>
				<div class='col-lg-6 '>
					<div class="container">
						<!-- START: Modules Anywhere -->
						<script>!function (d, s, id) {
                                                                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                                                                if (!d.getElementById(id)) {
                                                                                                    js = d.createElement(s);
                                                                                                    js.id = id;
                                                                                                    js.src = "//platform.twitter.com/widgets.js";
                                                                                                    fjs.parentNode.insertBefore(js, fjs);
                                                                                                }
                                                                                            }(document, "script", "twitter-wjs");</script>


						<a class="twitter-timeline" href="https://twitter.com/@InnovLab"
							data-widget-id="452930293221953536" data-theme="light"
							data-link-color="" data-chrome="" data-border-color="">Tweets by
							@@InnovLab</a>

						<!-- END: Modules Anywhere -->
					</div>
				</div>
				<div class='col-lg-6 '>
					<div class="container">
						<div class="st-module module" id="Mod203">
							<div class="module-inner">
								<div class="module-ct">

									<script>(function (d, s, id) {
                                                                                                            var js, fjs = d.getElementsByTagName(s)[0];
                                                                                                            if (d.getElementById(id))
                                                                                                                return;
                                                                                                            js = d.createElement(s);
                                                                                                            js.id = id;
                                                                                                            js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                                                                                                            fjs.parentNode.insertBefore(js, fjs);
                                                                                                        }(document, 'script', 'facebook-jssdk'));</script>
									<div class="cwlikebox100" id="cwlikebox1">
										<div id="likebox-wrapper">
											<div class='fb-like-box'
												data-href='https://www.facebook.com/InnovActionLab'
												data-width='200' data-height='492' data-colorscheme=''
												data-show_faces='0' data-show_border='0' data-stream='1'
												data-header='0' data-force_wall='0'></div>
										</div>

										<span class="cw-likebox-mod_copyrht"> Powered by <a
											target="_blank" title="CoalaWeb" href="http://coalaweb.com">CoalaWeb</a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class='st-divider ' style='padding: 30px 0; border: none;'></div>
		</div>
		<div class="container">
			<div class="st-module module" id="Mod0">
				<div class="module-inner">
					<div class="module-ct">


						<div class="custom"></div>
					</div>
				</div>
			</div>
		</div>

	</div>



	<div id="top-footer">


		<div class="custom">



			<!-- AddThis Button BEGIN -->


			<div style="width: 100%; background-color: #cf1801; height: 100px">


				<div
					style="float: left; width: 60%; text-align: center; padding-top: 18px;">
					<h1 style="color: #FFF;">CONDIVIDI</h1>
				</div>


				<div style="width: 40%; float: left; padding-top: 29px;">


					<div
						class="addthis_toolbox addthis_default_style addthis_32x32_style">


						<a class="addthis_button_facebook" style="margin: 5px"></a> <a
							class="addthis_button_twitter " style="margin: 5px"></a> <a
							class="addthis_button_linkedin " style="margin: 5px"></a> <a
							class="addthis_button_google_plusone_share" style="margin: 5px"></a>


					</div>


				</div>


			</div>


			<script type="text/javascript">var addthis_config = {"data_track_addressbar": false};</script>


			<script type="text/javascript"
				src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5303f4ca6c51f1c0"></script>


			<!-- AddThis Button END -->


		</div>

	</div>

	<div id="footer">
		<div class="container">
			<div class='margint30 marginb25 foo'>
				<div class="container" style="padding: 0px !important">
					<div class='row'>
						<div class='col-lg-3 col-sm-6 '>
							<div class="container">
								<div class="st-module module" id="Mod148">
									<div class="module-inner">
										<h3 class="module-title">
											<span>Info e Contatti</span>
										</h3>
										<div class="module-ct">

											<div id="k2ModuleBox148" class="k2ItemsBlock">


												<ul>
													<li class="even lastItem">
														<!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




														<!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

														<!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

														<div class="moduleItemIntrotext">

															<p>Per qualsiasi tipo di comunicazione o feedback, è
																possibile contattare i membri di 意大利华人专业人士协会
																all'indirizzo email</p>
															<p>
																<script type='text/javascript'>
                                                                                    <!--
                                                                                                                                        var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                                                                    var path = 'hr' + 'ef' + '=';
                                                                                    var addy66253 = '&#105;nf&#111;' + '&#64;';
                                                                                    addy66253 = addy66253 + '&#105;nn&#111;v&#97;ct&#105;&#111;nl&#97;b' + '&#46;' + '&#111;rg';
                                                                                    var addy_text66253 = '&#105;nf&#111;' + '&#64;' + '&#105;nn&#111;v&#97;ct&#105;&#111;nl&#97;b' + '&#46;' + '&#111;rg';
                                                                                    document.write('<a ' + path + '\'' + prefix + ':' + addy66253 + '\' target="_blank">');
                                                                                    document.write(addy_text66253);
                                                                                    document.write('<\/a>');
                                                                                    //-->\n </script>
																<script type='text/javascript'>
                                                                                    <!--
                                                                                                                                            document.write('<span style=\'display: none;\'>');
                                                                                    //-->
                                                                                                                                    </script>
																Questo indirizzo email è protetto dagli spambots. E'
																necessario abilitare JavaScript per vederlo.
																<script type='text/javascript'>
                                                                                    <!--
                                                                                                                                        document.write('</');
                                                                                    document.write('span>');
                                                                                    //-->
                                                                                                                                    </script>
															</p>
														</div>


														<div class="clr"></div>


														<div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

														<!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

														<!-- K2 Plugins: K2AfterDisplay -->

														<div class="clr"></div>
													</li>
													<li class="clearList"></li>
												</ul>



											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='col-lg-3 col-sm-6 '>
							<div class="container">
								<div class="st-module module" id="Mod111">
									<div class="module-inner">
										<h3 class="module-title">
											<span>Scorciatoie</span>
										</h3>
										<div class="module-ct">
											<ul class="footer-ul-style1">
												<li class="item-177"><a href="/it/chi-siamo.html">关于我们</a>
											
											</ul>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='col-lg-3 col-sm-6 '>
							<div class="container">
								<div class="st-module module" id="Mod150">
									<div class="module-inner">
										<h3 class="module-title">
											<span>GO SOCIAL</span>
										</h3>
										<div class="module-ct">

											<div id="k2ModuleBox150" class="k2ItemsBlock">


												<ul>
													<li class="even lastItem">
														<!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




														<!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

														<!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

														<div class="moduleItemIntrotext">

															<p>Seguici sui Social Network</p>
														</div>


														<div class="clr"></div>


														<div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

														<!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

														<!-- K2 Plugins: K2AfterDisplay -->

														<div class="clr"></div>
													</li>
													<li class="clearList"></li>
												</ul>



											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="st-module module" id="Mod143">
									<div class="module-inner">
										<div class="module-ct">

											<ul class="dmt-social-links dmt-icons-16">
												<li class="facebook"><a title="Facebook" rel="me nofollow"
													href="http://www.facebook.com/InnovActionLab"
													target="_blank"> <img
														src="modules/mod_dmt_social/icons/facebook_16.png" alt="" />
												</a></li>
												<li class="twitter"><a title="Twitter" rel="me nofollow"
													href="http://www.twitter.com/#!/innovlab" target="_blank">
														<img src="modules/mod_dmt_social/icons/twitter_16.png"
														alt="" />
												</a></li>
												<li class="google_wave"><a title="Google+" rel="me nofollow"
													href="https://plus.google.com/100340691659587836437"
													target="_blank"> <img
														src="modules/mod_dmt_social/icons/google_wave_16.png"
														alt="" />
												</a></li>
												<li class="linkedin"><a title="LinkedIn" rel="me nofollow"
													href="http://www.linkedin.com/company/innovaction-lab"
													target="_blank"> <img
														src="modules/mod_dmt_social/icons/linkedin_16.png" alt="" />
												</a></li>
												<li class="youtube"><a title="YouTube" rel="me nofollow"
													href="http://www.youtube.com/user/InnovActionLab"
													target="_blank"> <img
														src="modules/mod_dmt_social/icons/youtube_16.png" alt="" />
												</a></li>


											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='col-lg-3 col-sm-6 '>
							<div class="container">
								<div class="st-module module" id="Mod149">
									<div class="module-inner">
										<h3 class="module-title">
											<span>Copyrights</span>
										</h3>
										<div class="module-ct">

											<div id="k2ModuleBox149" class="k2ItemsBlock">


												<ul>
													<li class="even lastItem">
														<!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




														<!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

														<!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

														<div class="moduleItemIntrotext">

															<p>
																©2014 意大利华人专业人士协会<span style="line-height: 1.3em;"> </span>
															</p>
															<p>
																<span style="line-height: 1.3em;">Powered by</span>
															</p>
															<p>
																<a href="http://www.tecnojam.it" target="_blank"
																	title="Tecnojam"><span style="line-height: 1.3em;"><img
																		src="images/logo_tecnojam.png" alt="" /></span></a>
															</p>
															<p>
																<span style="line-height: 1.3em;">Tech Sponsor</span>
															</p>
															<p>
																<a href="http://www.translated.net" target="_blank"
																	title="Translated"><span style="line-height: 1.3em;"><img
																		src="images/translated-logo.png" alt="" /></span></a>
															</p>
														</div>


														<div class="clr"></div>


														<div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

														<!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

														<!-- K2 Plugins: K2AfterDisplay -->

														<div class="clr"></div>
													</li>
													<li class="clearList"></li>
												</ul>



											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="custom">
		<div>
			<a class="scrollup" href="#"><i class="icon-angle-up"></i></a>
		</div>
	</div>

	</div>
</body>
</html>


<?php
/* */
$app->run();

?>