<?php
session_start();

$ROOT = '../';

if (array_key_exists('LANG', $_GET)) $_SESSION['LANG'] = $_GET['LANG'];
if (!array_key_exists('LANG', $_SESSION)) $_SESSION['LANG'] = 'IT';
require($ROOT . 'lang/' . $_SESSION['LANG'] . '.php');

?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>>">
<head>

    <!--
Basic
    -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $lang['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="vCard & Resume Template"/>
    <meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio"/>
    <meta name="author" content="beshleyua"/>

    <!--
Load Fonts
-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!--
Load CSS
-->
    <link rel="stylesheet" href="<?= $ROOT ?>css/basic.css" type="text/css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/layout.css" type="text/css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/blogs.css" type="text/css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/ionicons.css" type="text/css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/owl.carousel.css" type="text/css"/>

    <!--
Background Gradient
-->
    <link rel="stylesheet" href="<?= $ROOT ?>css/gradient.css" type="text/css"/>

    <!--
Template New-Skin
-->
    <link rel="stylesheet" href="<?= $ROOT ?>css/new-skin/new-skin.css" type="text/css"/>

    <!--
Template RTL
-->
    <!--<link rel="stylesheet" href="css/rtl.css" />-->

    <!--
Template Colors
-->
    <link rel="stylesheet" href="<?= $ROOT ?>css/demos/demo-2-colors.css" type="text/css"/>
    <!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

    <!--
Template Dark
-->
    <link rel="stylesheet" href="<?= $ROOT ?>css/new-skin/classic-skin.css"/>
    <link rel="stylesheet" href="<?= $ROOT ?>css/template-dark/dark.css"/>


    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--
Favicons
    -->
    <link rel="shortcut icon" href="<?= $ROOT ?>images/favicons/favicon.ico">

</head>

<body>
<div class="page new-skin">

    <!-- preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- background -->
    <div class="background gradient">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!--
Container
    -->
    <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

        <!--
Header
        -->



    </div>

    <div class="content about">

        <!-- title -->
        <div class="title"> Microservices architecture: service discovery pattern</div>

        <!-- content -->
        <div class="row">
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="text-box">
                    <p>
                        <?=$lang['about_content']?>
                    </p>
                </div>
            </div>
            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                <div class="info-list">
                    <ul>

                        <li><strong> <?=$lang['about_residence']?></strong> Italy</li>
                        <li><strong><?=$lang['about_address']?></strong> Rome, IT</li>
                        <li><strong><?=$lang['about_phone']?></strong> +393291330320</li>
                        <li><strong><?=$lang['about_email']?></strong>pititto.fabrizio@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>

<!--
jQuery Scripts
-->
<script src="<?= $ROOT ?>js/jquery.min.js"></script>
<script src="<?= $ROOT ?>js/jquery.validate.js"></script>
<script src="<?= $ROOT ?>js/jquery.magnific-popup.js"></script>
<script src="<?= $ROOT ?>js/imagesloaded.pkgd.js"></script>
<script src="<?= $ROOT ?>js/isotope.pkgd.js"></script>
<script src="<?= $ROOT ?>js/jquery.slimscroll.js"></script>
<script src="<?= $ROOT ?>js/owl.carousel.js"></script>
<script src="<?= $ROOT ?>js/typed.js"></script>
<script src="https://use.fontawesome.com/8da76d029b.js"></script>

<!--
Google map api

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
-->
<!--
Main Scripts
-->
<script src="<?= $ROOT ?>js/scripts.js"></script>



</body>
</html>