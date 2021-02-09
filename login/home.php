<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE HTML>
<html>

<!--METADATA FÖR SIDAN-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YTKMED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="YTKMED - 2021" />
    <meta name="keywords" content="ytkmed" />
    <meta name="author" content="ytkmed" />
    <!--SLUT METADATA SIDA-->


    <!--FACEBOOK & INSTA INTEGRATION-->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <!--FACEBOOK & INSTA INTEGRATION SLUT-->

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- HEADER & ICON   -->
<div class="ytk-logo"></div>

<div id="page">
    <nav class="ytk-nav" role="navigation">
        <div class="container-wrap">
            <div class="top-menu">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="ytk-logo"><a href="../index.html">YTKMED</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="../index.html">Hem</a></li>
                            <li><a href="https://cloud.timeedit.net/chalmers/web/public/riq1YQg7Y04Zx5Q5Q07yX0Q66qZ55766g467YZ8Q05ov6QZZo.html" target="_blank">Schema</a></li>
                            <li class="has-dropdown">
                                <a>Kurser</a>
                                <ul class="dropdown">
                                    <li><a href="https://chalmers.instructure.com/courses/12388">Linjär algebra (TMV 143)</a></li>
                                    <li><a href="https://chalmers.instructure.com/courses/12281">Python <br>(DAT445)</a></li>
                                </ul>
                            </li>
                            <li><a href="../sidor/dokument/dokument.html">Dokument</a></li>
                            <li class="has-dropdown">
                                <a>Övrigt</a>
                                <ul class="dropdown">
                                    <li><a href="../sidor/tmv143/copyright/bok.html">Bok</a></li>
                                    <li><a href="../sidor/tmv143/copyright/facit.html">Facit</a></li>
                                    <li><a href="../sidor/dokument/anki.html">Anki</a></li>
                                    <li><a href="../UU/UU.html">UU - Test</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <div class="container-wrap">



        <div id="ytk-services">
            <div class="row">

                <div class="col-lg-12 text-center animate-box">
                    <div class="services login">
						<span class="icon">
							<i class="icon-home"></i>
						</span>
                        <div class="desc">
                            <h3>Hej, <?=$_SESSION['name']?>!</h3>

                            <hr class="dotted">

                            <p><a href="profile.php"><i class="icon-profile"></i>Profil</a></p>
                            <a href="logout.php"><i class="icon-exit"></i>Logga Ut</a>

                            <p><span class="date">14/3</span><br>LAB 3: Artillery game<br><i class=""></i><i class=""></i></p>
                            <hr class="dotted">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="ytk-counter" class="ytk-counter">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center animate-box">
                </div>
            </div>
        </div>

    </div>


    <div class="container-wrap">
        <footer id="ytk-footer" role="contentinfo">
            <div class="row">
                <div class="col-md-12 text-center ytk-widget">
                    <h4>Om</h4>
                    <p>Denna sida underhålls kontinuerligt.<br> Senast uppdaterad: 08/02</p>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">YTKMED - 2021 </small>

                    </p>

                </div>
            </div>
        </footer>
    </div><!-- END container-wrap -->
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="../js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="../js/jquery.countTo.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>
<script src="../js/countdowns/kandidat_countdown.js"></script>
<script src="../js/small_countdowns/small_countdowns.js"></script>


</body>
</html>


