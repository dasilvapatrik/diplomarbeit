<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Schule Buchwiesen</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/buchwiesen.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
               <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
              <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">-->
			 <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Schule Buchwiesen</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#aktuelles">Aktuelles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Leitbild</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>					
                    <li>
                        <a class="page-scroll" href="#portfolio">Angebote</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#downloads">Downloads</a>
                    </li>					
                    <li>
                        <a class="page-scroll" href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!-- Header -->
    <header>
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <div>
                    <img u="image" src2="img/slider/BuchwiesenBG2low.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/slider/BuchwiesenBG3.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/slider/BuchwiesenBG4low.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/slider/BuchwiesenBG1low.jpg" />
                </div>						
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
            <style>
                /* jssor slider bullet navigator skin 21 css */
                /*
                .jssorb21 div           (normal)
                .jssorb21 div:hover     (normal mouseover)
                .jssorb21 .av           (active)
                .jssorb21 .av:hover     (active mouseover)
                .jssorb21 .dn           (mousedown)
                */
                .jssorb21 {
                    position: absolute;
                }
                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 19px;
                    height: 19px;
                    text-align: center;
                    line-height: 19px;
                    color: white;
                    font-size: 12px;
                    background: url(img/slider/b01.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb21 div { background-position: -5px -5px; }
                .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
                .jssorb21 .av { background-position: -65px -5px; }
                .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
            <style>
                /* jssor slider arrow navigator skin 21 css */
                /*
                .jssora21l                  (normal)
                .jssora21r                  (normal)
                .jssora21l:hover            (normal mouseover)
                .jssora21r:hover            (normal mouseover)
                .jssora21l.jssora21ldn      (mousedown)
                .jssora21r.jssora21rdn      (mousedown)
                */
                .jssora21l, .jssora21r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 55px;
                    height: 55px;
                    cursor: pointer;
                    background: url(img/slider/a21.png) center center no-repeat;
                    overflow: hidden;
                }
                .jssora21l { background-position: -3px -33px; }
                .jssora21r { background-position: -63px -33px; }
                .jssora21l:hover { background-position: -123px -33px; }
                .jssora21r:hover { background-position: -183px -33px; }
                .jssora21l.jssora21ldn { background-position: -243px -33px; }
                .jssora21r.jssora21rdn { background-position: -303px -33px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
        </div>
        <!-- Jssor Slider End -->
    </header>
	
	<!-- Anspruchsgruppen -->
    <section id="anspruchsgruppen" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Anspruchsgruppen Titel</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>-->
            </div>
			<div class="row">
				<div class="col-sm-4">
					<div class="anspruchsgruppen">
						<h4>Betreuung / Hort</h4>
						<p class="text-muted">bla bla bla</p>
						<div class="anspruchsgruppen-item">
							<a href="#portfolioModal2" class="anspruchsgruppen-link" data-toggle="modal">
								<div class="anspruchsgruppen-hover img-circle">
									<div class="anspruchsgruppen-hover-content">
										<i class="glyphicon glyphicon-cutlery fa-3x"></i> <!-- "fa fa-plus fa-3x" - weisses plus (+) zeichen-->
									</div>
								</div>
								<img src="img/anspruchsgruppen/hort.png" class="img-responsive img-circle" alt="">
							</a>
						</div>							
					</div>
				</div>
				<div class="col-sm-4">
					<div class="anspruchsgruppen">
						<h4>Schule Buchwiesen</h4>
						<p class="text-muted">bla bla bla</p>	
						<div class="anspruchsgruppen-item">
							<a href="#aktuelles" class="page-scroll anspruchsgruppen-link">
								<div class="anspruchsgruppen-hover img-circle">
									<div class="anspruchsgruppen-hover-content">
										<i class="glyphicon glyphicon-education fa-3x"></i> <!-- weisses plus (+) zeichen-->
									</div>
								</div>
								<img src="img/anspruchsgruppen/logo.png" class="img-responsive img-circle" alt="">
							</a>
						</div>						
					</div>
				</div>
				<div class="col-sm-4">
					<div class="anspruchsgruppen">
						<h4>Elternforum</h4>
						<p class="text-muted">bla bla bla</p>				
					<div class="anspruchsgruppen-item">
						<a href="#portfolioModal2" class="anspruchsgruppen-link" data-toggle="modal">
							<div class="anspruchsgruppen-hover img-circle">
								<div class="anspruchsgruppen-hover-content">
									<i class="glyphicon glyphicon-link fa-3x"></i> <!-- weisses plus (+) zeichen-->
								</div>
							</div>
							<img src="img/anspruchsgruppen/elternforum.jpg" class="img-responsive img-circle" alt="">
						</a>
					</div>
				</div>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Scroll Hintergrund -->	
	<div class="scrollhintergrund">
		<div class="cd-fixed-bg cd-bg-1">
            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Text TextText Text</h2>
                    <h3 ><kbd>Lorem ipsum dolor sit amet consectetur.</kbd></h3>
                </div>
            </div>-->		
		</div><!-- cd-fixed-bg -->
	</div>		
<!-- Ende Scroll Hintergrund -->
	
	<!-- Aktuelles -->
	<section id="aktuelles">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Aktuelles</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- Standard-Panel-Inhalt -->
						<div class="panel-heading">Panel-Überschrift</div>
						<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
						</div>

						<!-- Tabelle -->
						<table class="table">
							<tr>
								<td>Bilder</td>
							</tr>
						</table>
					</div>
				</div>	
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- Standard-Panel-Inhalt -->
						<div class="panel-heading">Panel-Überschrift</div>
						<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
						</div>

						<!-- Tabelle -->
						<table class="table">
							<tr>
								<td>Bilder</td>
							</tr>
						</table>
					</div>
					<div class="alert alert-info" role="alert"><b>Hinweis!</b> Hier ist deine Aufmerksamkeit gefragt, aber es ist nicht ganz so wichtig.</div>
				</div>			
				
			</div>
        </div>
    </section>

<!-- Scroll Hintergrund -->	
	<div class="scrollhintergrund">
		<div class="cd-fixed-bg cd-bg-2">
            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Text TextText Text</h2>
                    <h3 ><kbd>Lorem ipsum dolor sit amet consectetur.</kbd></h3>
                </div>
            </div>-->		
		</div><!-- cd-fixed-bg -->
	</div>		
<!-- Ende Scroll Hintergrund -->	
	
    <!-- Leitbild Section -->
    <section id="about" class="testbild">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Leitbild</h2>
                    <h3 class="section-subheading text-muted">Hier zusätzlichen Text einfügen</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/leitbild/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Lehren & Lernen</h4>
                                    <!--<h4 class="subheading">subheading</h4>-->
                                </div>
                                <div class="timeline-body">
										<ul class="list-unstyled text-muted">
											<li>Durch ganzheitliche Förderung leiten wir die Kinder zu eigenverantwortlichem Denken und Handeln an.</li>
											<li>Wir leben ein Lehr- und Lernklima, in dem Toleranz und soziales Lernen gestärkt werden.</li>
											<li>Mit differenzierten und individuellen Lernformen werden die Kinder ihren Fähigkeiten und Fertigkeiten entsprechend gefördert.</li>
											<li>Wir vernetzen uns gezielt, um jedes Kind vollumfänglich zu unterstützen.</li>
										</ul>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/leitbild/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Lebensraum Schule</h4>
                                </div>
                                <div class="timeline-body">										
									<ul class="list-unstyled text-muted">
										<li>Wir schaffen Vertrauen durch Offenheit, Verbindlichkeit und Respekt.</li>
										<li>Wir schätzen die Vielfältigkeit an unserer Schule und nutzen sie als Ressource.</li>
										<li>Wir helfen und unterstützen einander.</li>
										<li>Wir halten uns an die Schulregeln, damit sich alle wohl und sicher fühlen können. </li>
										<li>Durch gemeinsame Anlässe und Projekte fördern wir den Zusammenhalt. </li>
										<li>Wir pflegen eine Schulkultur, an welcher die Kinder mitwirken können.</li>
									</ul>
								</div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/leitbild/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Kooperationen</h4>
                                </div>
                                <div class="timeline-body">
									<ul class="list-unstyled text-muted">
										<li>Wir sind ein Team, zeigen Präsenz und sind vernetzt. </li>
										<li>Wir pflegen einen offenen und ehrlichen Dialog im Team, mit den Kindern, den Eltern und den Behörden. </li>
										<li>Wir leben eine konstruktive Feedback-Kultur.</li>
										<li>Wir sind offen für das Mitwirken der Eltern.</li>
									</ul>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/leitbild/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Schulmanagement</h4>
                                    <!--<h4 class="subheading">subheading</h4>-->
                                </div>
                                <div class="timeline-body">
										<ul class="list-unstyled text-muted">
											<li>Wir gewährleisten die stetige Entwicklung unserer Schule und stärken unsere Identität nach innen und aussen.</li>
											<li>Miteinander leben wir Kontinuität und Verlässlichkeit und sichern Erreichtes nachhaltig. </li>
											<li>Basierend auf Vertrauen pflegen wir einen offenen und wertschätzenden Dialog.</li>
											<li>Wir führen professionell, lösungs- und ressourcenorientiert.  </li>
										</ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/leitbild/5.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Betrieb & Infrastruktur</h4>
                                </div>
                                <div class="timeline-body">
									<ul class="list-unstyled text-muted">
										<li>Wir nutzen die Schule und die Umgebung als Lern- und Spielorte. </li>
										<li>Wir pflegen einen bewussten und sorgfältigen Umgang mit Material, Räumen und der Schulanlage. </li>
									</ul>
                                </div>
                            </div>
                        </li>						
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/leitbild/logo200.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>	


<!-- Scroll Hintergrund -->	
	<div class="scrollhintergrund">
		<div class="cd-fixed-bg cd-bg-3">
            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Text TextText Text</h2>
                    <h3 ><kbd>Lorem ipsum dolor sit amet consectetur.</kbd></h3>
                </div>
            </div>-->
		</div><!-- cd-fixed-bg -->
	</div>		
<!-- Ende Scroll Hintergrund -->

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
					<img class="center-block img-responsive" src="img/logos/logo_ohnetext300.png" alt="">
                    <h2 class="section-heading">Wir sind Buchwiesen</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
					<p class="large text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
                </div>
            </div>
        </div>
    </section>
	
<!-- Scroll Hintergrund -->	
	<div class="scrollhintergrund">
		<div class="cd-fixed-bg cd-bg-4">
            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Text TextText Text</h2>
                    <h3 ><kbd>Lorem ipsum dolor sit amet consectetur.</kbd></h3>
                </div>
            </div>-->
		</div><!-- cd-fixed-bg -->
	</div>		
<!-- Ende Scroll Hintergrund -->	
	
    <!-- Schulangebote Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Angebote</h2>
                    <h3 class="section-subheading text-muted">Text Texttext textText Texttext textText Texttext textText Texttext textText Texttext text</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/schulangebote/ateliers_farbig.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Ateliers</h4>
                        <p class="text-muted">Bla Bla Bla</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/schulangebote/schuelerrat_farbig.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Schülerrat</h4>
                        <p class="text-muted">Bla Bla Bla</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/schulangebote/bilbiothek_farbig.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bibliothek</h4>
                        <p class="text-muted">Bla Bla Bla</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Downloads -->
	<section id="downloads">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Downloads</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- Standard-Panel-Inhalt -->
						<div class="panel-heading">Termine</div>
						<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
						</div>
					</div>
				</div>	
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- Standard-Panel-Inhalt -->
						<div class="panel-heading">Formulare</div>
						<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
						</div>
					</div>
				</div>			
				<div class="col-lg-12">
					<div class="panel panel-default">
						<!-- Standard-Panel-Inhalt -->
						<div class="panel-heading">Buchwiesen Info</div>
						<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
						</div>
					</div>
				</div>						
			</div>
		</div>
	</section>
	



	
	
	
	
	
	

    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontakt-Formular</h2>

                    <h3 class="section-subheading text-muted">					
					<address>
					  <strong>Schule Buchwiesen</strong>, Schönauweg 15, 8052 Zürich<br>
					  Telefon 044 306 41 51 <strong>|</strong> 
					  Fax 044 306 41 58 <strong>|</strong> 
					  <a href="mailto:info@buchwiesen.ch">info@buchwiesen.ch</a> 
					  
					</address></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Bitte Ihr Namen eingeben.">
									<p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-Mail" id="email" required data-validation-required-message="Bitte Ihre gültige E-Mail-Adresse eingeben.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Betreff" id="phone" required data-validation-required-message="Bitte ein Betreff eingeben.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mitteilung" id="message" required data-validation-required-message="Bitte eine Mitteilung eingeben."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Nachricht senden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!-- Adresse GoogleMaps -->	
	<div class="buchwiesenMap">
		<head> 
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script> 
			<script type="text/javascript"> 
				var geocoder; 
				  var map; 
				$(document).ready(function() { 
					 initialize(); 
					});  

				  function initialize() { 
						geocoder = new google.maps.Geocoder(); 
						var latlng = new google.maps.LatLng(-34.397, 150.644); 
						var myOptions = { 
							  zoom: 11, 
							  center: latlng, 
							  /*disableDefaultUI: true*/

							  // Hier Snazzy Maps style einfÃ¼gen
							  styles: [{"stylers":[{"visibility":"on"},{"saturation":-100},{"gamma":0.54}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#4d4946"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"gamma":0.48}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"gamma":7.18}]}]
						} 
						map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

						codeAddress(); 
					  } 

				function codeAddress() { 
						var address = "Schönauweg 15,8052 Zürich"; 
						geocoder.geocode( { 'address': address}, function(results, status) { 
						  if (status == google.maps.GeocoderStatus.OK) { 
							map.setCenter(results[0].geometry.location); 
							var marker = new google.maps.Marker({ 
									map: map, 
									position: results[0].geometry.location 
							}); 
						  } else { 
							alert("Geocode was not successful for the following reason: " + status); 
						  } 
					}); 
				  }   
			</script> 
		</head> 
		<body onLoad="initialize()">  
			<div id="map_canvas" style="width: 100%; height: 300px;"></div>  
		</body>
	</div>	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">&copy; Schule Buchwiesen 2016 | Designed by <a href="http://www.umgekehrt.ch">umgekehrt.ch</a></span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></li>
						<li><a href="#">Privatbereich</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
 <!-- Popup Seiten -->	
    <!-- Portfolio Modal Atelier -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Atelier</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal Schülerrat -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Schülerrat</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal Bibliothek -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Bibliothek</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ENDE Popup Seiten -->	


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	
	<!-- jssor slider scripts-->
    <!-- use jssor.slider.debug.js for debug -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

</body>

</html>
