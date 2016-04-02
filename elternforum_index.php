<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Schule Buchwiesen - Elternforum</title>

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
	<?php include("elternforum_navbar.php"); /* Seitenauswahl: elternforum_navbar.php*/?>
	
	<!-- Header slider -->
    <header>
	<?php include("slider.php"); /* Seitenauswahl: slider.php*/?>
    </header>
	
	<!-- Aktuelles -->
	<?php include("elternforum_aktuelles.php"); /* Seitenauswahl: elternforum_aktuelles.php*/?>	

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
	<?php include("elternforum_about.php"); /* Seitenauswahl: wer sind wir */?>

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
	<?php include("elternforum_team.php"); /* Seitenauswahl: Mitglieder Elternforum */?>

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
	<?php include("downloads.php"); /* Seitenauswahl: downloads.php*/?>
	
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


    <!-- Contact Section -->
	<?php include("kontakt.php"); /* Seitenauswahl: kontakt.php*/?>
	<!-- Footer -->
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

	
	<!-- test section -->
	<?php /*include("test.php"); /* Seitenauswahl: test.php*/?>

	<!-- Popup Seiten -->	
	<?php include("angebotepopups.php"); /* Seitenauswahl: angebotepopups.php*/?>


<!-- JavaScript -->
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
