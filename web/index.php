
<?php
/* 
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
});*/
?>


<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#"
      xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-it" lang="it-it"
      dir="ltr">
    <head>
        <title>意大利华人专业人士协会</title>

        <meta name="viewport"
              content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!--<base href="/" /> -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords"
              content="startup, start, up, innovation, innovazione, investitori, imprenditoria, imprenditore, idea, corso, pitch" />
        <meta name="description"
              content="意大利华人专业人士协会 " />
        <meta name="generator"
              content="Joomla! - Open Source Content Management" />
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

        <link rel="stylesheet" href="css/slid.css"
              type="text/css" />	

        <link rel="stylesheet" href="css/founder.css"
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
                  content="意大利华人专业人士协会 ">


                <meta itemprop="image" content="/logo.jpg">





                    <!-- Twitter Card data -->


                    <meta name="twitter:card" content="summary">


                        <meta name="twitter:creator" content="http://www.apci-italia.it/">


                            <meta name="twitter:url" content="http://www.apci-italia.it/">


                                <meta name="twitter:title" content="意大利华人专业人士协会">


                                    <meta name="twitter:description"
                                          content="意大利华人专业人士协会 ">


                                        <meta name="twitter:image" content="/logo.jpg">





                                            <!-- Open Graph data -->


                                            <meta property="og:locale" content="it_IT" />


                                            <meta property="og:type" content="article" />


                                            <meta property="og:title" content="意大利华人专业人士协会" />


                                            <meta property="og:description"
                                                  content="意大利华人专业人士协会 " />


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
                                                                                                    href="http://www.apci-italia.it/" target="_blank">
                                                                                    <img src="modules/mod_dmt_social/icons/facebook_16.png" alt="" />
                                                                                </a></li>
                                                                            <li class="twitter"><a title="Twitter" rel="me nofollow"
                                                                                                   href="http://www.apci-italia.it/" target="_blank"> <img
                                                                                        src="modules/mod_dmt_social/icons/twitter_16.png" alt="" />
                                                                                </a></li>
                                                                            <li class="google_wave"><a title="Google+" rel="me nofollow"
                                                                                                       href="http://www.apci-italia.it/"
                                                                                                       target="_blank"> <img
                                                                                        src="modules/mod_dmt_social/icons/google_wave_16.png" alt="" />
                                                                                </a></li>
                                                                            <li class="linkedin"><a title="LinkedIn" rel="me nofollow"
                                                                                                    href="http://www.apci-italia.it/"
                                                                                                    target="_blank"> <img
                                                                                        src="modules/mod_dmt_social/icons/linkedin_16.png" alt="" />
                                                                                </a></li>
                                                                            <li class="youtube"><a title="YouTube" rel="me nofollow"
                                                                                                   href="http://www.apci-italia.it/"
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
                                                                                <li class="item-201 current active"><a class="active"href="/">主页</a></li>
                                                                                <li class="item-202"><a class="" href="/milan-2015.html">米兰世博会</a></li>
                                                                                <li class="item-237 deeper parent"><a href="#stop">活动介绍</a>
                                                                                    <ul class="nav-child unstyled small">
                                                                                        <li class="item-203"><a class=""
                                                                                                                href="/tianjin-2014.php">过往活动</a></li>
                                                                                        <li class="item-204"><a href="/milan-2015.html">即将进行</a></li>
                                                                                    </ul></li>
                                                                                <li class="item-206"><a class="" href="/federation-artical.html">协会章程</a></li>
                                                                                <li class="item-207"><a class="" href="/joinus.html">加入协会</a></li>
                                                                                <li class="item-242"><a class="" href="/contactus.html">联系我们</a></li>
                                                                            </ul>

                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </header>


                                                    <!----banner---->

                                                    <!-- begin-slider -->
                                                    <div id="slid-container">
                                                        <img id = "slid-image" src="images/slider_people.jpg" alt="">        		
                                                            <p id = "slid-text">因为专业所以优秀，服务于意大利专业人士！</p>
                                                    </div>	         

                                                    <!-- //End-slider -->

                                                    <!----//banner---->




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

                                                                                        <p style="font-size: 60px">意大利华人专业人士协会</p>
                                                                                        <p style="font-size: 50px">以促进意大利专业人士的交流为宗旨</p>
                                                                                        <h1>以促进学术交流为理念</h1>
                                                                                        <h1>以服务于专业人士为目标</h1>
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
                                                                                                     style="line-height: 1.3em;">促进交流</span>
                                                                                            </h3>
                                                                                            <br />
                                                                                            <p class="margint10">我们举办了多期学术交流与学术讲座活动，受到了多方好评，我们还将举办多期有利于专业人士交流的活动</p>
                                                                                        </div>
                                                                                        <div class="col-lg-4" style="margin-bottom: 35px;">
                                                                                            <h3>
                                                                                                <img src="images/secondIcon.png" alt=""
                                                                                                     style="margin-right: 15px; height: 35px;" />享受优惠
                                                                                            </h3>
                                                                                            <br />
                                                                                            <p class="margint10">成为APCI的会员，您将享受我们为您提供的众多研讨会，座谈会，以及人际关系拓展等活动。
                                                                                                除此之外，APCI的赞助商们也为会员提供了许多的福利。</p>
                                                                                        </div>

                                                                                        <div class="col-lg-4" style="margin-bottom: 35px;">
                                                                                            <h3>
                                                                                                <img src="images/resultIcon.png" alt=""
                                                                                                     style="margin-right: 15px; height: 35px;" />保障权益
                                                                                            </h3>
                                                                                            <br />
                                                                                            <p class="margint10">我们有多种专业人士会员，他们都可以以自己的专业素养帮助您在职业发展上取得成功。
                                                                                                在这里，您可以获得更多宝贵的机会和经验。</p>
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

                                                        <!-- Fonder -->
                                                        <div class="founder-container">
                                                            <center>
                                                                <h1 style="margin-top: 60px;">协会创立人员</h1>

                                                                <p>以下仅列出协会初创人员</p>
                                                                <p></p>
                                                                <p></p>
                                                                <h1></h1>

                                                                <div class="container">
                                                                    <div class="row portfolio-box">

                                                                        <div class="col-lg-3 col-sm-3 item ">

                                                                            <!-- Titolo -->
                                                                            <div class="board-title">
                                                                                <h3 style="text-align: center; font-size: 16px; margin-bottom: 5px;">刘金权</h3>
                                                                            </div>

                                                                            <!-- Immagine -->
                                                                            <center><img src="images/founder/liujinquan.jpg" alt="刘金权" class="img-responsive board-image"/></center>

                                                                            <!-- Deascrizione -->
                                                                            <div class="margint10 board-description">
                                                                                <p><span style="font-size: 13px; text-align: center;">意大利天津同乡会会长</span></p>  
                                                                                <p><span style="font-size: 13px; text-align: center;">意大利华商总会常务副会长</span></p>  
                                                                                <p><span style="font-size: 13px; text-align: center;">亚欧经贸文化交流会常务副主席</span></p>  
                                                                                <p><span style="font-size: 13px; text-align: center;">中华医药学会副主席</span></p>                                                                              </div>

                                                                            <!-- LinkedIn -->
                                                                            <div>
                                                                                <a href="" target="_blank" alt="刘金权"><img src="images/linkedin_button.png" alt="" class="board-link"/></a>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-3 col-sm-3 item ">

                                                                            <!-- Titolo -->
                                                                            <div class="board-title">
                                                                                <h3 style="text-align: center; font-size: 16px; margin-bottom: 5px;">牛颖异</h3>
                                                                            </div>

                                                                            <!-- Immagine -->
                                                                            <center><img src="images/founder/niuyingyi.jpg" alt="牛颖异" class="img-responsive board-image"/></center>

                                                                            <!-- Deascrizione -->
                                                                            <div class="margint10 board-description">
                                                                                <p><span style="font-size: 13px; text-align: center;">罗马大学第一建筑学院城市建筑学硕士</span></p>        		
                                                                            </div>

                                                                            <!-- LinkedIn -->
                                                                            <div>
                                                                                <a href="" target="_blank" alt="牛颖异"><img src="images/linkedin_button.png" alt="" class="board-link"/></a>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-lg-3 col-sm-3 item ">

                                                                            <!-- Titolo -->
                                                                            <div class="board-title">
                                                                                <h3 style="text-align: center; font-size: 16px; margin-bottom: 5px;">史磊</h3>
                                                                            </div>

                                                                            <!-- Immagine -->
                                                                            <center><img src="images/founder/shilei.png" alt="史磊" class="img-responsive board-image"/></center>

                                                                            <!-- Deascrizione -->
                                                                            <div class="margint10 board-description">
                                                                                <p><span style="font-size: 13px; text-align: center;">意大利信息工程专业的高材生
                                                                                        连续获得过多届意大利信息工程领域的奖项。还是多年全额奖学金的获得者。</span></p>        		
                                                                            </div>

                                                                            <!-- LinkedIn -->
                                                                            <div>
                                                                                <a href="it.linkedin.com/in/itshi" target="_blank" alt="史磊"><img src="images/linkedin_button.png" alt="" class="board-link"/></a>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                        </div>








                                                        <!--supporter -->
                                                        <div class="container-grey">
                                                            <div class="container">
                                                                <div class="st-module module" id="Mod205">
                                                                    <div class="module-inner">
                                                                        <div class="module-ct">
                                                                            <div class="custom">
                                                                                <p></p>
                                                                                <p></p>
                                                                                <center>
                                                                                    <h1>支持企业</h1>
                                                                                </center>

                                                                                <p></p>
                                                                                <div class="col-lg-6 col-sm-6">
                                                                                    <a href="http://www.ouhuaitaly.com/" target="_blank"> <img
                                                                                            class="img-responsive"
                                                                                            src="images/supporter/ouhua.gif" alt="欧华时报" /></a>
                                                                                </div>
                                                                                <!--
                                                                                <div class="col-lg-6 col-sm-6">
                                                                                    <a
                                                                                        href="http://www./"
                                                                                        target="_blank"> <img class="img-responsive"
                                                                                                          src="images/supporter/todo.png" alt=""
                                                                                                          style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                                                                    <a href="http://www.it/" target="_self"> <img
                                                                                            class="img-responsive"
                                                                                            src="images/supporter/todo.png" alt=""
                                                                                            style="float: left; margin-right: 30px; padding-top: 15px;" /></a>
                                                                                    <a href="http://www..it/" target="_blank"> <img
                                                                                            class="img-responsive"
                                                                                            src="images/supporter/todo.png" alt=""
                                                                                            style="float: left; margin-right: 10px;" /></a>
                                                                                </div>
                                                                                -->
                                                                                <p></p>
                                                                                <p></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>






                                                    <!-- EDIZIONI PRECEDENTI-->
                                                    <div class="editions-area">
                                                        <div class="st-divider " style="padding: 30px 0; border: none;"></div>
                                                        <center>
                                                            <h1>主办过的活动</h1>
                                                        </center>
                                                        <div class="st-divider " style="padding: 20px 0; border: none;"></div>

                                                        <div class="container">
                                                            <div class="row portfolio-box">


                                                                <div class="col-lg-4 col-sm-4 item ">
                                                                    <div class="catItemView blog-box groupLeading">
                                                                        <div class="blg-img-box">
                                                                            <img
                                                                                src="media/k2/items/cache/5cf9cad94714c5577919c266171d935c_L.jpg"
                                                                                alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">
                                                                                <div class="mask">
                                                                                    <div class="prt-lnk-wrppr editions-link clearfix">
                                                                                        <div class="pull-left editions-popup popup">
                                                                                            <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="editions-legend clearfix">
                                                                            <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                                                        </div>
                                                                        <div class="clr"></div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- SOCIAL MEDIA -->
                                                    <!--
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
                                                    <!--
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
                                                    <!--
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
                                                    -->
                                                </div>



                                                <div id="top-footer">


                                                    <div class="custom">



                                                        <!-- AddThis Button BEGIN -->


                                                        <div style="width: 100%; background-color: #cf1801; height: 100px">


                                                            <div
                                                                style="float: left; width: 60%; text-align: center; padding-top: 18px;">
                                                                <h1 align="center" style="color: #FFF;">意大利华人专业人士协会</h1>


                                                            </div>

                                                        </div>
                                                        <div align="center"> </div>
                                                        <div align="center"> </div>
                                                        <div align="center">All trademarks and registered trademarks appearing on </div>
                                                        <div align="center"> this site are the property of their respective owners. </div>
                                                    </div>

                                                </div>
                                                </div>
                                                </div>



                                            </body>
                                            </html>


                                            <?php
                                            /* */
                                            $app->run();
                                            ?>