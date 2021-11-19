<?php
session_start();

$ROOT ='./static/';

if(array_key_exists('LANG', $_GET))
    $_SESSION['LANG'] = $_GET['LANG'];
if(!array_key_exists('LANG', $_SESSION))
    $_SESSION['LANG'] = 'IT';

require(__DIR__.'/static/lang/'.$_SESSION['LANG'].'.php');

?>

<!DOCTYPE html>
<html lang="<?=$_SESSION['LANG']?>>">
<head>

	<!--
Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$lang['title']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="vCard & Resume Template" />
	<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="beshleyua" />

	<!--
Load Fonts
-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!--
Load CSS
-->
	<link rel="stylesheet" href="<?=$ROOT ?>css/basic.css"  type="text/css" />
	<link rel="stylesheet" href="<?=$ROOT ?>css/layout.css"  type="text/css"/>
	<link rel="stylesheet" href="<?=$ROOT ?>css/blogs.css" type="text/css" />
	<link rel="stylesheet" href="<?=$ROOT ?>css/ionicons.css" type="text/css" />
	<link rel="stylesheet" href="<?=$ROOT ?>css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?=$ROOT ?>css/animate.css"  type="text/css"/>
	<link rel="stylesheet" href="<?=$ROOT ?>css/owl.carousel.css"  type="text/css"/>

	<!--
Background Gradient
-->
	<link rel="stylesheet" href="<?=$ROOT ?>css/gradient.css" type="text/css" />

	<!--
Template New-Skin
-->
	<link rel="stylesheet" href="<?=$ROOT ?>css/new-skin/new-skin.css" type="text/css" />

	<!--
Template RTL
-->
	<!--<link rel="stylesheet" href="css/rtl.css" />-->

	<!--
Template Colors
-->
	<link rel="stylesheet" href="<?=$ROOT ?>css/demos/demo-2-colors.css"  type="text/css"/>
	<!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

	<!--
Template Dark
-->
	<link rel="stylesheet" href="<?=$ROOT ?>css/new-skin/classic-skin.css" />
	<link rel="stylesheet" href="<?=$ROOT ?>css/template-dark/dark.css" />


	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--
Favicons
	-->
	<link rel="shortcut icon" href="<?=$ROOT ?>images/favicons/favicon.ico">

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
			<header class="header">
                <!-- Language -->
                <i class="fa fa-language"></i>
                <a class="language" href="?LANG=EN" class="active">En</a>
                <a class="language" href="?LANG=IT">It</a>

				<!-- header profile -->
				<div class="profile">
					<div class="image">
						<a href="#">
							<img src="<?=$ROOT ?>images/profile_.png" alt="Fabrizio Pititto">
						</a>
					</div>
					<div class="title">Fabrizio Pititto</div>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
							<p>Web Designer</p>
							<p>Software Developer</p>
							<p>Freelancer</p>
						</div>
					</div>
				</div>

				<!-- menu btn -->
				<!--<a href="#" class="menu-btn"><span></span></a>-->

				<!-- menu -->
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-person"></span>
								<span class="link">About</span>
							</a>
						</li>
						<li>
							<a href="#resume-card">
								<span class="icon ion-android-list"></span>
								<span class="link"><?=$lang['topmenu_resume']?></span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link"><?=$lang['topmenu_works']?></span>
							</a>
						</li>
						<li>
							<a href="<?=$ROOT ?>download/cv.pdf"   target="_blank" class="lnk">
                                <div class="icon"><i class="fa fa-save"></i></div>
								<span class="link">Download CV</span>
							</a>
						</li>
                        <!--<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link"><?=$lang['topmenu_contacts']?></span>
							</a>
						</li> -->
					</ul>
				</div>

			</header>

			<!--
Card - Started
-->
			<div class="card-started" id="home-card">

				<!--
Profile
				-->
				<div class="profile">

					<!-- profile image -->
					<div class="slide" style="background-image: url(<?=$ROOT ?>images/fabrizio_site.jpg);"></div>

                    <!-- profile titles -->
                    <div class="title">Fabrizio Pititto</div>
                    <!--<div class="subtitle">Web Designer</div>-->
                    <div class="subtitle subtitle-typed">
                        <div class="typing-title">
                            <p>Web Designer</p>
                            <p>Software Developer</p>
                            <p>Freelancer</p>
                            <p>Trainer</p>
                        </div>
                    </div>

					<!-- profile socials -->
					<div class="social">
                        <a target="_blank" href="https://www.linkedin.com/in/fabrizio-pititto-69899237/"><span class="fa fa-linkedin"></span></a>

						<a target="_blank" href="https://github.com/f4b3r"><span class="fa fa-github"></span></a>

						<a target="_blank" href="https://stackoverflow.com/users/4640415/f4b3r"><span class="fa fa-stack-overflow"></span></a>
					</div>

					<!-- profile buttons
					<div class="lnks">
						<a href="<?=$ROOT ?>download/cv.pdf"   target="_blank" class="lnk">
							<span class="text"><?=$lang['link_downloadcv']?></span>
						</a>
						<a href="#" class="lnk discover">
							<span class="text"><?=$lang['link_contact_me']?></span>
						</a>
					</div>
-->
				</div>

			</div>

			<!--
Card - About
-->
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">

					<!--
About
					-->
					<div class="content about">

						<!-- title -->
						<div class="title"> <?=$lang['about_about_me']?></div>

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

					<!--
Services
					-->
					<div class="content services">

						<!-- title -->
						<div class="title"><?=$lang['service_what_i_do']?></div>

						<!-- content -->
						<div class="row service-items border-line-v">
							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon">

										<span class="fa fa-html5"></span>



									</div>
									<div class="name">
										<span >
Web Development								</span>
									</div>
									<div class="desc">
										<div >
											<p><?=$lang['service_web_descr']?></p>
										</div>
									</div>
								</div>
							</div>
							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon">
										<span class="fa fa-code"></span>

									</div>
									<div class="name">
										<span >
Software development								</span>
									</div>
									<div class="desc">
										<div >
											<p><?=$lang['service_sftdev_descr']?></p>
										</div>
									</div>
								</div>
							</div>
							<!-- service item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-h">
								<div class="service-item">
									<div class="icon">
										<span class="fa fa-university"></span>
									</div>
									<div class="name">
										<span >
Teaching								</span>
									</div>
									<div class="desc">
										<div >
											<p><?= $lang['service_teach_descr']?>  </p>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="clear"></div>

					</div>




					<!--
Clients
					-->
					<div class="content clients">

						<!-- title -->
						<div class="title"><?= $lang['clients_clients']?></div>

						<!-- content -->
						<div class="row client-items">

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.nexi.it/">
											<img src="<?=$ROOT ?>images/clients/nexi.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.allianz.it/">
											<img src="<?=$ROOT ?>images/clients/allianz.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.infocamere.it">
											<img src="<?=$ROOT ?>images/clients/infocamere.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="https://www.sisal.it">
											<img src="<?=$ROOT ?>images/clients/sisal.png" alt="" />
										</a>
									</div>
								</div>
							</div>



							<div class="clear"></div>
						</div>

					</div>

					<!-- Quote -->
					<div class="content quote">

						<!-- title -->
						<div class="title">
							<span >Quote</span>
						</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="revs-item">
									<div class="text">
										<div >
                                            “Design is not just what it looks like and feels like. Design is how it works.” – Steve Jobs										</div>
									</div>

										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<!--
Card - Resume
-->
			<div class="card-inner" id="resume-card">
				<div class="card-wrap">

					<!--
Resume
					-->
					<div class="content resume">

						<!-- title -->
						<div class="title"><?= $lang['resume_resume']?></div>

						<!-- content -->
						<div class="row">

							<!-- experience -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-briefcase"></i></div>
									<div class="name"><?= $lang['resume_esperience']?></div>
								</div>
								<div class="resume-items">


                                    <div class="resume-item border-line-h active">
                                        <div class="date">2021 - Present</div>
                                        <div class="name"><?= $lang['resume_esperience_0_name']?></div>
                                        <div class="company"><?= $lang['resume_esperience_0_company']?></div>
                                        <p>
                                            <?= $lang['resume_esperience_0_desc']?>
                                        </p>


                                    </div>


									<div class="resume-item border-line-h active">
										<div class="date">2021 - Present</div>
										<div class="name"><?= $lang['resume_esperience_1_name']?></div>
										<div class="company"><?= $lang['resume_esperience_1_company']?></div>
										<p>
                                            <?= $lang['resume_esperience_1_desc']?>
										</p>
                                     <br>
                                        <div class="company"><?= $lang['resume_esperience_2_company']?></div>
                                        <p>
                                            <?= $lang['resume_esperience_2_desc']?>
                                        </p>

									</div>


									<div class="resume-item">
                                        <div class="date">2019 - 2021</div>
                                        <div class="name"><?= $lang['resume_esperience_3_name']?></div>
                                        <div class="company"><?= $lang['resume_esperience_3_company']?></div>
                                        <p>
                                            <?= $lang['resume_esperience_3_desc']?>
                                        </p>
									</div>
                                    <div class="resume-item">
                                        <div class="date">2018 - 2019</div>
                                        <div class="name"><?= $lang['resume_esperience_4_name']?></div>
                                        <div class="company"><?= $lang['resume_esperience_4_company']?></div>
                                        <p>
                                            <?= $lang['resume_esperience_4_desc']?>
                                        </p>
                                    </div>
                                    <div class="resume-item">
                                        <div class="date">2017 - 2018</div>
                                        <div class="name"><?= $lang['resume_esperience_5_name']?></div>
                                        <div class="company"><?= $lang['resume_esperience_5_company']?></div>
                                        <p>
                                            <?= $lang['resume_esperience_5_desc']?>
                                        </p>
                                    </div>
                                    <div class="resume-item">
                                        <div class="date">2016 - 2017</div>
                                        <div class="name"><?= $lang['resume_esperience_6_name']?></div>
                                        <div class="company"><?= $lang['resume_esperience_6_company']?></div>
                                        <p>
                                            <?= $lang['resume_esperience_6_desc']?>
                                        </p>
                                    </div>

								</div>
							</div>

							<!-- education -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="fa fa-university"></i></div>
									<div class="name"> <?= $lang['education_education']?></div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h">
										<div class="date">2006 - 2009</div>
										<div class="name">Università degli studi Roma 3</div>
										<div class="company">Rome</div>
										<p>
                                            <?= $lang['education_1']?>
										</p>
									</div>
                                    <div class="resume-item border-line-h">
                                        <div class="date">2001 - 2006</div>
                                        <div class="name">Università degli studi Roma 3</div>
                                        <div class="company">Rome</div>
                                        <p>
                                            <?= $lang['education_2']?>
                                        </p>
                                    </div>
									<div class="resume-item border-line-h">
										<div class="date">2009</div>
										<div class="name">Programming Course</div>
										<div class="company">Rome</div>
										<p>
											Java developer
										</p>
									</div>

								</div>
							</div>

							<div class="clear"></div>
						</div>

					</div>

					<!--
						Skills
					-->
					<div class="content skills">

						<!-- title -->
						<div class="title">My Skills</div>

						<!-- content -->
						<div class="row">

                            <!-- skill item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="skills-list circles">
                                    <div class="skill-title border-line-h">
                                        <div class="icon"><i class="fa fa-code"></i></div>
                                        <div class="name">Coding</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="name">Java</div>
                                            <div class="image">
                                                <img src="<?=$ROOT ?>images/skills/java.png">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">PHP</div>
                                            <div class="image">
                                                <img src="<?=$ROOT ?>images/skills/php.png">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">Angular</div>
                                            <div class="image">
                                                <img src="<?=$ROOT ?>images/skills/angular.png">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="name">HTML / CSS / JS</div>
                                            <div class="image">
                                                <img src="<?=$ROOT ?>images/skills/js.png">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>




							<!-- skill item -->
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="fa fa-list"></i></div>
										<div class="name"><?= $lang['skill_knowledge']?></div>
									</div>
									<ul>
										<li>
                                            <div class="name"><?= $lang['skill_1']?><div>
										</li>
										<li>
                                            <div class="name"><?= $lang['skill_2']?></div>
										</li>
										<li>
											<div class="name"><?= $lang['skill_3']?></div>
										</li>
										<li>
											<div class="name"><?= $lang['skill_4']?></div>
										</li>
										<li>
											<div class="name"><?= $lang['skill_5']?></div>
										</li>
										<li>
											<div class="name"><?= $lang['skill_6']?></div>
										</li>

									</ul>
								</div>
							</div>

                            <!-- skill item -->
                            <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                                <div class="skills-list dotted">
                                    <div class="skill-title border-line-h">
                                        <div class="icon"><i class="fa fa-flag"></i></div>
                                        <div class="name"><?= $lang['skill_language']?></div>
                                    </div>
                                    <ul>
                                        <li class="border-line-h">
                                            <div class="name"><?= $lang['skill_language_it']?></div>
                                            <div class="progress">
                                                <div class="percentage" style="width:100%;"></div>
                                            </div>
                                        </li>
                                        <li class="border-line-h">
                                            <div class="name"><?= $lang['skill_language_en']?></div>
                                            <div class="progress">
                                                <div class="percentage" style="width:80%;"></div>
                                            </div>
                                        </li>
                                        <li class="border-line-h">
                                            <div class="name"><?= $lang['skill_language_es']?></div>
                                            <div class="progress">
                                                <div class="percentage" style="width:30%;"></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                            <div class="clear"></div>
						</div>

					</div>


				</div>
			</div>

			<!--
				Card - Works
			-->
			<div class="card-inner" id="works-card">
				<div class="card-wrap">

					<!--
						Works
					-->
					<div class="content works">

						<!-- title -->
						<div class="title">Recent Works</div>

						<!-- filters
						<div class="filter-menu filter-button-group">
							<div class="f_btn active">
								<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="photo" />Image</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="gallery" />Gallery</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="video" />Video</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="music" />Music</label>
							</div>
							<div class="f_btn">
								<label><input type="radio" name="fl_radio" value="design" />Content</label>
							</div>
						</div>
-->
						<!-- content -->
						<div class="row grid-items border-line-v">

							<!-- work item photo -->
							<div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
								<div class="box-item">
									<div class="image">
										<a href="<?=$ROOT ?>images/works/dive.png" class="has-popup-image">
											<img src="<?=$ROOT ?>images/works/dive.png" alt="" />
											<span class="info">
												<span class="ion ion-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="<?=$ROOT ?>images/works/dive.png" class="name has-popup-image">Dive - Immersive Change</a>
										<div class="category">Html, Css, PHP, Javascript, Drupal</div>
									</div>
								</div>
							</div>

                            <!-- work item photo -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="<?=$ROOT ?>images/works/nexi.png" class="has-popup-image">
                                            <img src="<?=$ROOT ?>images/works/nexi.png" alt="" />
                                            <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="<?=$ROOT ?>images/works/nexi.png" class="name has-popup-image">Nexi - IBK servizio</a>
                                        <div class="category">Liferay 6.0, Spring Integration, Spring MVC, HTML, Jquery
                                            ,Javascript, Restful WS</div>
                                    </div>
                                </div>
                            </div>



                            <!-- work item photo -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="<?=$ROOT ?>images/works/viaggiatreno.png" class="has-popup-image">
                                            <img src="<?=$ROOT ?>images/works/viaggiatreno.png" alt="" />
                                            <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="<?=$ROOT ?>images/works/viaggiatreno.png" class="name has-popup-image">Trenitalia - Viaggiatreno</a>
                                        <div class="category">Spring integration, JSP, Javascript, Maven</div>
                                    </div>
                                </div>
                            </div>

                            <!-- work item photo -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="<?=$ROOT ?>images/works/lottomatica.png" class="has-popup-image">
                                            <img src="<?=$ROOT ?>images/works/lottomatica.png" alt="" />
                                            <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="<?=$ROOT ?>images/works/lottomatica.png" class="name has-popup-image">Lottomatica - Poker client</a>
                                        <div class="category">Spring, Hazelcast, Apache Camel, ActiveMQ, Maven</div>
                                    </div>
                                </div>
                            </div>

                            <!-- work item photo -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="<?=$ROOT ?>images/works/allianz.png" class="has-popup-image">
                                            <img src="<?=$ROOT ?>images/works/allianz.png" alt="" />
                                            <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="<?=$ROOT ?>images/works/allianz.png" class="name has-popup-image">Allianz - Sirio</a>
                                        <div class="category">Java 8, Angular 6, Bootstrap,Spring Boot, Redis</div>
                                    </div>
                                </div>
                            </div>





                            <div class="clear"></div>
						</div>

					</div>

				</div>
			</div>


			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">

					<!--
						Conacts Info
					-->
					<div class="content contacts">

						<!-- title -->
						<div class="title">Get in Touch</div>

						<!-- content -->
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="map" id="map"></div>
								<div class="info-list">
									<ul>
										<li><strong>Address . . . . .</strong> Rome, ITALY</li>
										<li><strong>Email . . . .</strong>pititto.fabrizio@gmail.com</li>
										<li><strong>Phone . . . . .</strong> +393291330320 </li>
										<li><strong>Freelance . . . . .</strong> Available</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

					<!--
						Contact Form
					-->


				</div>
			</div>

		</div>

		<div class="s_overlay"></div>
		<div class="content-sidebar">
			<div class="sidebar-wrap search-form">
				<aside id="secondary" class="widget-area">
					<section id="search-2" class="widget widget_search">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search …" value="" name="s">
						</label>
						<input type="submit" class="search-submit" value="Search">
					</section>
					<section class="widget widget_recent_entries">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-word">Recent</span> Posts</span>
						</h2>
						<ul>
							<li>
								<a href="#">Creativity Is More Than</a>
							</li>
							<li>
								<a href="#">Designing the perfect</a>
							</li>
							<li>
								<a href="#">Music Player Design</a>
							</li>
							<li>
								<a href="#">A Song And Dance Act</a>
							</li>
							<li>
								<a href="#">By spite about do of allow</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_recent_comments">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-word">Recent</span> Comments</span>
						</h2>
						<ul>
							<li class="recentcomments">
								<span class="comment-author-link">JOHN SMITH</span> on <a href="#">Creativity Is More Than</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">ADAM SMITH</span> on <a href="#">Creativity Is More Than</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">admin</span> on <a href="#">Designing the perfect</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">admin</span> on <a href=#">Designing the perfect</a>
							</li>
							<li class="recentcomments">
								<span class="comment-author-link">James</span> on <a href="#">Designing the perfect</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_archive">
						<h2 class="widget-title">
							<span class="widget-title-span">
								<span class="first-letter">Archives</span>
							</span>
						</h2>
						<ul>
							<li>
								<a href="#">November 2018</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_categories">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-letter">Categories</span></span>
						</h2>
						<ul>
							<li class="cat-item cat-item-2">
								<a href="#">Design</a>
							</li>
							<li class="cat-item cat-item-3">
								<a href="#">Music</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_meta">
						<h2 class="widget-title">
							<span class="widget-title-span"><span class="first-letter">Meta</span></span>
						</h2>
						<ul>
							<li><a href="#">Log in</a></li>
							<li><a href="#">Entries feed</a></li>
							<li><a href="#">Comments feed</a></li>
							<li><a href="#">WordPress.org</a></li>
						</ul>
					</section>
				</aside>
			</div>
			<span class="close"></span>
		</div>

	</div>

	<!--
    jQuery Scripts
    -->
	<script src="<?=$ROOT ?>js/jquery.min.js"></script>
	<script src="<?=$ROOT ?>js/jquery.validate.js"></script>
	<script src="<?=$ROOT ?>js/jquery.magnific-popup.js"></script>
	<script src="<?=$ROOT ?>js/imagesloaded.pkgd.js"></script>
	<script src="<?=$ROOT ?>js/isotope.pkgd.js"></script>
	<script src="<?=$ROOT ?>js/jquery.slimscroll.js"></script>
	<script src="<?=$ROOT ?>js/owl.carousel.js"></script>
	<script src="<?=$ROOT ?>js/typed.js"></script>
	<script src="https://use.fontawesome.com/8da76d029b.js"></script>

	<!--
    Google map api

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
-->
	<!--
    Main Scripts
    -->
	<script src="<?=$ROOT ?>js/scripts.js"></script>

</body>
</html>