<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!-- Title and Meta Tags Begins -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
        <title>Saltwater Digital</title>
        <!-- Favicons & Apple Touch Icons Begins -->
        <link rel="shortcut icon" href="images/favicon.ico">	
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Orbitron:400,500,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Begins-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="css/tweet-carousel.css" rel="stylesheet" type="text/css" />
        <!-- Client Flexslider -->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
        <!-- Main Style -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- Skin Colors -->
        <link href="css/color-schemes/blue.css" id="changeable-colors" rel="stylesheet" type="text/css" /> 
        <!-- CSS Ends -->	
    </head>
    <body>

        <!-- Page Loader -->
        <div id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </div>		


        <!-- Header Begins --> 
        <div id="header" class="header-section header-image mail-chimp">			
            
            <!-- Alpha Overlay -->
            <!--<div class="video-bg">-->
                
                <!-- Top Section Begins -->
                <div id="sticky-section" class="sticky-navigation">
                    <div id="top-section" class="top-container absolute container">
                        <div role="navigation" class="navbar top-navbar">						
                            <div class="navbar-header">
            
                                <!-- Logo Begins -->
                                <div class="site-logo">
                                    <a title="Logo" href=""><img src="images/Saltwater-Digital-Logo-White-Background.png" style='height:35px;' /> Saltwater <span class="f-logo">Digital</span> </a>
                                </div><!-- Logo Ends -->								
                            </div>						
                        </div>
                    </div>
                </div><!-- Top Section Ends -->
                <div class="container">
                    <div class="row">
                        <div class="slider-inner">				
                            <div class="col-md-12 left-part text-center">					
                                <h1>We Are Here to Enhance Your Business</h1>															
                                <!--<p class="white text-left">Pellentesque sapien purus, sagittis eu accumsan convallis, vehicula ut lectus. Fusce accumsan purus pretium ligula vehicula, interdum nisl vulputate. Vivamus ultrices luctus quam eu feugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam. </p>-->
                                <p class="form-message2 white" style="display: none; color:#FFFFFF;"></p>	
                                <form id="contactform2" name="contactform2" method="post" action="mail/subscription2.php">
                                    <div class="input-text form-group has-feedback">
                                        <input type="email" placeholder="Enter Your Email Address" class="input-name form-control" name="contact_email">
                                        <button type="submit" class="btn">Get Started</button>
                                    </div>
                                </form>
                            </div>
                        </div>		
                    </div>	
                </div>
            <!--</div>-->
        </div><!-- Header Ends -->	

        <!-- Contact Begins -->
        <div id="contact">
            <div class="contact section-inner">
                <div class="container">
                    <!-- Section Title -->
                    <div class="row">
                        <div class="col-md-12 text-center section-title">						
                            <h3 class="text-capitalize animated" data-animation="fadeInUp" data-animation-delay="300">We're Working <span class="f-logo">Hard</span></h3>
                            <p class="animated" data-animation="fadeInUp" data-animation-delay="400">In the mean time, feel free to get ahold of us.</p>
                            <hr>
                        </div>
                    </div>
                    <!-- Section Inner -->
                    <div class="row">
                        <div class="col-md-4 col-sm-4 b-box1 center-text animated" data-animation="fadeInUp" data-animation-delay="300">						
                            <i class="flaticon-tachometer"></i>					
                            <h4>Office</h4>
                            <h5>14017 N Bayshore Dr.<br>Madeira Beach, FL 33078</h5>
                        </div>
                        <div class="col-md-4 col-sm-4 center-text animated" data-animation="fadeInUp" data-animation-delay="400">
                            <i class="flaticon-call10"></i>	
                            <h4>Phone</h4>
                            <h5>+1.727.222.0626</h5>
                        </div>
                        <div class="col-md-4 col-sm-4 b-box3 center-text animated" data-animation="fadeInUp" data-animation-delay="500">
                            <i class="flaticon-new"></i>	
                            <h4>Email</h4>
                            <h5><a href="mailto:info@saltwater.digital?Subject=Website%20Inquiry">info@saltwater.digital</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Contact Ends -->

        <!-- Map Begins -->
        <div class="contact-map">	
            <!-- Map Section -->
            <div class="map-section">
                <!--Map Section Begins-->
                <div class="map">				
                    <div id="map_canvas"></div>				
                </div>
            </div>
        </div><!-- Map Ends -->
        <!-- Copyright Begins -->
        <div class="copyright section-inner white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copy-text">
                        <p class="white">&copy; Saltwater <span class="f-logo">Digital</span> <?= date("Y"); ?></p>
                    </div>				
                </div>
            </div>
        </div><!-- Copyright Ends -->    

        <!-- Script Begins -->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <!-- Text Slider JS -->
        <script type="text/javascript" src="js/jquery.easy-ticker.min.js"></script>
        <!-- Theme -->          
        <script type="text/javascript" src="js/theme.js"></script>	
        <!-- Color -->
        <!--<script type="text/javascript" src="js/color-panel.js"></script>-->
        <!-- Script Ends -->	
    </body>
</html>
