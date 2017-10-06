<?php
$servername = "localhost";
$username = "id2156308_tssgndu";
$password = "tssgndu";
$dbname = "id2156308_tss";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TSS - Technical Student Society	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Website of a technical student society" />
	<meta name="keywords" content="TSS, Technical, GNDU, Society, Guru Nanak Dev University, Computer Science, Tech" />
	
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	
    <!-- CSS Begins
    ================================================== -->
	<!-- Google Font And Custom Font Begins -->
	<link href='fonts/Roboto.css' rel='stylesheet' type='text/css'>
    <link href='fonts/JosefinSans.css' rel='stylesheet' type='text/css'>

	<!-- FONT ICONS -->
	<!-- font-awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- IonIcons -->
	<link href="icon/ionicons/css/ionicons.css" rel="stylesheet">
	<!-- Elegant Icons -->
	<link href="icon/elegant-icons/style.css" rel="stylesheet">
    <!--/ FONT ICONS -->

	<!--Animate Effect-->
	<link href="css/animate.php" rel="stylesheet">
 	<link href="css/hover.css" rel="stylesheet" >
	
	<!--prettyPhoto for Image Preview-->
	<link href="css/prettyPhoto.css" rel="stylesheet"> 

	<!-- nivo slider CSS -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/nivo-preview.css" type="text/css" media="screen" />

	<!--Owl Carousel -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/owl.transitions.css" rel="stylesheet">

	
	<!--BootStrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="css/normalize.css" rel="stylesheet">
	
	<!--Preloader -->
	<link href="css/preloader.css" rel="stylesheet">

	<!-- Main Style -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
	<!--Replace Your Color-->
	<link rel="stylesheet" href="css/colors/default-color.css">
	<!--Replace Your Color Ends-->


	<!-- Template Demo Color  Examples -->
	
	<!--Rosy Brown Color 	
	<link rel="stylesheet" type="text/css" href="css/colors/rosybrown.css"/>  
	-->
	<!--Green Color
	<link rel="stylesheet" type="text/css" href="css/colors/green.css"/> 
	-->
    <!--Hazel Wood Color 
	<link rel="stylesheet" type="text/css" href="css/colors/hazelwood.css"/>
	--> 	
	<!--Gray Color 
	<link rel="stylesheet" type="text/css" href="css/colors/gray.css"/>
    --> 
    <!-- END Template Color Demo Examples -->
		
</head>
<body>

<!-- Start: Preloader section
=============================================--> 
<div id="loader-wrapper">
	<div id="loader" style="color: #333;"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
</div>
<!-- End: Preloader section
=============================================--> 


<!-- Start: Header Section
=============================================-->   
<!-- nav -->
<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
			</button> 
			<a class="navbar-brand" href="#">
				<!-- LOGO -->
				<img alt="TSS" src="images/logo.png" style="margin-top: -20px;">
			</a>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-left" >
                <li>
                    <a href="#slider" >Home</a>
                </li>
                <li>
                    <a href="#about">about</a>
                </li>
                <li>
                    <a href="#clubs">Clubs</a>
                </li>
				<li>
                    <a href="#events">Events</a>
                </li>
				<li>
                    <a href="#team">team</a>
                </li>
                <li>
                    <a href="#contact">contact</a>
                </li>
            </ul>
			<div class="pull-right header-right text-right">
                <ul>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.facebook.com/tssgndu"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.twitter.com/gndutss"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.linkedin.com/in/technicalstudentsociety"><i class="fa fa-linkedin"></i></a>
					</li>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.instagram.com/tss_gndu/"><i class="fa fa-instagram"></i></a>
					</li>
				</ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!--End: /. nav -->

<!-- slider -->
<div class="slider-area">
	<div class="bend niceties preview-2">
		<div id="slider" class="slides">	<!-- slider image-->
			<img src="images/slider/slide4.jpg" alt="image" title="#slider-direction-1"  />
			<img src="images/slider/slide3.jpg" alt="image" title="#slider-direction-1"  />
			<img src="images/slider/slide2.jpg" alt="image" title="#slider-direction-1"  />
			<img src="images/slider/slide1.jpg" alt="image" title="#slider-direction-1"  />
		</div> <!-- end : slider image-->

		<div id="slider-direction-1" class="t-cn slider-direction">
			<div class="slider-progress"></div>
			<div class="slider-content t-cn s-tb slider-1"> <!-- slider content-->
				<div class="title-container s-tb-c title-compress">
					<div data-wow-delay="0.1s" data-wow-duration="1s" class="strokeme tp-caption big-title rs-title customin customout bg-sld-cp-primary wow fadeInDownBig" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDownBig;">
					<!-- <span style="-webkit-text-stroke-color: #2EADAB ;-webkit-text-stroke-width: 0.5px;"> -->
					<span class="title-builder"> T</span>echnical</u><span class="title-builder"> S</span>tudent <span class="title-builder">S</span>ociety
					</div>
					<div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomInDown" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomInDown;">
					<span><b>An organisation of the students, by the students and for the students.</b></span>
					</div>							 
				</div>
				<div data-wow-delay="0.3s" data-wow-duration="3s" class="button tp-caption customin rs-parallaxlevel-0 wow zoomInUp" style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomInUp;">
				<a href="#about" class="btn btn-success">Learn more</a>
				</div>
			</div>	<!-- end : slider content-->
		</div>
	</div>
</div>
<!-- slider end-->

<!-- End: Header Section
==================================================--> 


<!-- Start: About Section
==================================================--> 
<section id="about" class="about-ssection">
    <div class="container">
        <div class="row">
				<!-- Start: Heading -->
				<div class="section-header">
					<h2><small>Our abouts </small>Welcome to TSS</h2>
					 <p>The Technical Students Society (TSS) is a student body that is governed completely by the young blood students of the <b>CS Department, Guru Nanak Dev University (Amritsar)</b> which gives a different experience to the university life and also helps students in exploring their potential.
					 <br>TSS was founded way back in 2003 and in its short history, seen a big bundle of achievements in various sectors especially technical, reflected by the name of the society itself.</p> 
				</div>

				<!-- End:  heading -->	
            <div class="col-lg-12 col-sm-12">
                <div class="row timeline_posts">
                	<div class="col-lg-6 col-sm-6">
					    <!-- about-item -->
                        <div class="about-item">
							<div class="icon-fea icon_lightbulb_alt"></div>
							<h5 class="fea-left">DEXTERITY</h5>
							<div class="fea-info">As the name suggests, the main goal of the society is the enhancement of the technical skills of the students of the department so that they feel more confident and comfortable with the latest technologies.</div>
                        </div><!-- End: .about-item -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
					    <!-- about-item -->
                        <div class="about-item">
							<div class="icon-fea icon_balance"></div>
							<h5 class="fea-left">SYNERGY</h5>
							<div class="fea-info">Being a part of TSS, the students learn how to work together and channelize their energies together to achieve a team goal efficiently. The whole idea is about the creation of a whole that is greater than the simple sum of its parts.</div>
							<!-- <span class="feat-learn hvr-float-shadow">LEARN MORE <i class="arrow_right"></i></span> -->
                        </div><!-- End: .about-item -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
					    <!-- about-item -->
                        <div class="about-item">
							<div class="icon-fea icon_music"></div>
							<h5 class="fea-left">RECREATION</h5>
							<div class="fea-info">Physical and mental recreation contributes to a full and meaningful life, giving the students an escape from their busy academic schedule. Such activities provide the opportunity to achieve our full potential and gain life satisfaction.</div>
                        </div><!-- End: .about-item -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
					    <!-- about-item -->
                        <div class="about-item">
							<div class="icon-fea icon_toolbox"></div>
							<h5 class="fea-left">ADVICE HUB</h5>
							<div class="fea-info">The senior members of the society serve as the guiding light to the juniors who are confused with their career goals. Working with them, the freshers get the chance to develop their technical as well as management skills.</div>
                        </div><!-- End: .about-item -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
					    <!-- about-item -->
                        <div class="about-item">
							<div class="icon-fea icon_clock_alt"></div>
							<h5 class="fea-left">24/7 SUPPORT</h5>
							<div class="fea-info">The students of the department are free to send their doubts and queries on the society's email. The members of the technical team try to provide them with the best possible solutions.</div>
                        </div><!-- End: .about-item -->
                    </div>
					<div class="col-lg-6 col-sm-6">
					    <!-- about-item -->
                        <div class="about-item">
							<div class="icon-fea icon_heart_alt"></div>
							<h5 class="fea-left">COOL STAFF</h5>
							<div class="fea-info">The members of the society have a very friendly attitude. Helping fellow students fills them with a feeling of contentment and satisfaction.</div>
                        </div><!-- End: .about-item -->
                    </div>
                </div><!-- /. row -->
            </div><!-- /. col-lg-8 -->			
        </div><!-- /. row -->
    </div> <!-- /. container -->
</section>
<!-- End: About Section
==================================================-->  
<!-- Start:Achieve Section 
==================================================--> 
<section class="achieve-section" id="achieve-section">
	<div class="section-border"></div>
    <!-- container -->
    <div class="container"><!-- col-lg-3 col-sm-6 -->
		<div class="row"><!-- col-lg-3 col-sm-6 -->
			<div class="col-lg-4"><!-- col-lg-4 -->
				<div class="row"><!-- row -->
					<div class="col-lg-12">
						<!-- heading -->
						<div class="section-header">
							<h2><small>Achievements</small>  Success</h2>
							 <p style="text-align: justify;">In its short history, society has seen a big bundle of achievements in various sectors especially technical, reflected by the name of society itself.</p> 
						</div><!-- End:  heading -->	
						<!-- heading /- -->
					</div>
				</div><!-- row /- -->
			</div>
			<!-- col-lg-4 /- -->
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4 col-sm-4">
						<div class="icon-lay">
							<i class="icon_group"></i>
						</div>
						<h2 class="stat-count count">150</h2>
						<h5><span>Events</span></h5>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="icon-lay">
							<i class="icon_mic_alt"></i>
						</div>
						<h2 class="stat-count count">200</h2>
						<h5><span>Seminars</span></h5>
					</div>					<div class="col-lg-4 col-sm-4">
						<div class="icon-lay">
							<i class="icon_toolbox_alt"></i>
						</div>
						<h2 class="stat-count count">3000</h2>
						<h5><span>Placements</span></h5>
					</div>
					<!-- col-lg-4 /- -->
					 
				</div><!-- row /- -->
			</div><!-- col-lg-8 /- -->
		</div><!-- row /- -->
    </div><!-- container /- -->
</section>
<!-- End:Achieve Section 
==================================================--> 

<!-- Start: Features Section
==================================================-->  
<section class="otherFeatures">
    <!--Container-->
    <div class="container">
        <div class="row">
		    <!-- Features Heading -->
            <div class="col-lg-6 col-sm-6 otherShot">
			    <img alt="feature" src="images/background/feature1.png">
			</div>
            <div class="col-lg-6 col-sm-6">
			    <div class="section-header">
			        <h2><small>Creative Approach</small>WHAT WE DO?</h2>
                    <p>We organise university wide fun as well as technical events so as to develop technical, mental as well as physical skills of the the students.</p>
				</div>	
                <div class="otherDesc">
					<!-- Features list-->
                    <ul class="oth-feat-list">
                        <li class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="ico col-lg-3 col-sm-3 col-xs-3">
                                <i class="icon_cog"></i>
                            </div>
                            <div class="details col-lg-9 col-sm-9 col-xs-9">
							    <h4>Technical Events</h4>
                            </div>
                        </li><!-- /. Features list 1-->
						
                        <li class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="ico col-lg-3 col-sm-3 col-xs-3">
                                <i class="icon_mic"></i>
                            </div>
                            <div class="details col-lg-9 col-sm-9 col-xs-9">
							    <h4>Seminars & Workshops</h4>
                            </div>
                        </li><!-- /. Features list 2-->
                        <li class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="ico col-lg-3 col-sm-3 col-xs-3">
                                <i class="icon_lightbulb"></i>
                            </div>
                            <div class="details col-lg-9 col-sm-9 col-xs-9">
							    <h4>Flash Classes</h4>
                            </div>
                        </li><!-- /. Features list 3-->
                        <li class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="ico col-lg-3 col-sm-3 col-xs-3">
                                <i class="icon_rook"></i>
                            </div>
                            <div class="details col-lg-9 col-sm-9 col-xs-9">
							    <h4>Fun Events</h4>
                                
                            </div>
                        </li><!-- /. Features list 4-->
                    </ul><!-- /. Features list-->
                </div><!-- /.otherDesc -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- End: Features Section
==================================================-->  

<!-- Start:Get In Touch Section 
==================================================--> 
<section class="get-touch-section">
	<div class="container">
	  <div class="row">
		<div class="col-lg-7 col-sm-7 get-touch-text">
			<div class="get-touch-warper">
					<h3 class="hs1">Interested in working with us?</h3>
					<h4 class="lp5">Reach out today to get started with TSS.</h4>	
			</div>
		</div>
		<div class="col-lg-5 col-sm-5 get-touch-button">
			<a class="btn-bg-white btn-size-3 typeform-share button" href="https://codewarriors.typeform.com/to/O5Vkhw" target="_blank" data-mode="2" title="Contact Us">JOIN US</a>
			<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){}})()</script>
		</div>
	 </div>
	</div>
</section>
<!-- End:Get In Touch Section 
==================================================-->


<!-- Start: Pricing and Testimonial Section 
==================================================-->  
<section class="pricing-section" id="clubs">
    <div class="container">
    <div class="section-header">
    	<br>
    	<h2>CLUBS & COMMITTEES</h2>
    	<br>
    </div>
	    <div style="width:100%;height:100%;float:left;">
	        <div class="row" style="width:49%;float:left;" >
	            <!--.col-lg-6-->
	            <div>
	                <!-- Title -->
	                <div class="pricings">
	                    <div class="carousel slide" layout="row" data-ride="carousel" id="myClubs">
	                        <div class="carousel-inner">
							    <!-- pricing item 1-->
	                            <div class="item active singCarousel">
	                                <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 1 -->
	                                    <div class="pricing-box">
	                                        <h3>Technical Club</h3>
	                                        <ul class="pricing-features">
												<li>Flash Classes</li>
												<li>Technical Events</li>
												<li>Seminars and Workshops</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">View Details</a> -->
	                                    </div><!--/ pricing-box 1 -->
	                                </div>
	                            </div>
								<!-- End: pricing item 1-->
								<!-- pricing item 2-->
	                            <div class="item singCarousel">
	                                 <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 2 -->
	                                    <div class="pricing-box">
	                                        <h3>Literature Club</h3>
	                                        <ul class="pricing-features">
												<li>Debates</li>
												<li>Extempore</li>
												<li>Group Discussions</li>
												<li>Communication Skills</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">View Details</a> -->
	                                    </div><!--/ pricing-box 2 -->
	                                </div>
	                            </div>
								<!-- End: pricing item 2-->
								<!-- pricing item 3-->
	                            <div class="item singCarousel">
	                                 <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 3 -->
	                                    <div class="pricing-box">
	                                        <h3>Designing Club</h3>
	                                        <ul class="pricing-features">
	                                        	<li>Notice Board</li>
	                                        	<li>Event Posters</li>
												<li>Festival Decorations</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">View Details</a> -->
	                                    </div><!--/ pricing-box 3 -->
	                                </div>
	                            </div>
								<!-- End: pricing item 3-->
								<div class="item singCarousel">
	                                 <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 3 -->
	                                    <div class="pricing-box">
	                                        <h3>Cultural Club</h3>
	                                        <ul class="pricing-features">
												<li>Drama</li>
												<li>Singing</li>
												<li>Dancing</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">Buy Now</a> -->
	                                    </div><!--/ pricing-box 3 -->
	                                </div>
	                            </div>
	                        </div>
	                        <div class="arrow-indicator clientCont">
	                            <a class="prev" data-slide="prev" href="#myClubs"><i class="fa fa-angle-left"></i></a> <a class="next" data-slide="next" href="#myClubs"><i class=
	                            "fa fa-angle-right"></i></a>
	                        </div>
	                    </div><!-- Testimonial-->
	                </div><!--/ Title -->
	            </div><!--/.col-lg-6-->
	        </div><!--/.row-->

	        <!-- COMMITTEES -->
	        <div class="row" style="float:left;width:49%;display:inline-block;">
	            <!--.col-lg-6-->
	            <div >
	                <!-- Title -->
	                <div class="pricings">
	                    <div class="carousel slide" layout="row" data-ride="carousel" id="committees">
	                        <div class="carousel-inner">
							    <!-- pricing item 1-->
	                            <div class="item active singCarousel">
	                                <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 1 -->
	                                    <div class="pricing-box">
	                                        <h3>Finance Committee</h3>
	                                        <ul class="pricing-features">
	                                        	<li>Funds</li>
												<li>Prizes and Awards</li>
												<li>Event Registerations</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">View Details</a> -->
	                                    </div><!--/ pricing-box 1 -->
	                                </div>
	                            </div>
								<!-- End: pricing item 1-->
								<!-- pricing item 2-->
	                            <div class="item singCarousel">
	                                 <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 2 -->
	                                    <div class="pricing-box">
	                                        <h3>Placement Committee</h3>
	                                        <ul class="pricing-features">
												<li>Mock Tests</li>
												<li>Placements Drives</li>
												<li>Group Discussions</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">View Details</a> -->
	                                    </div><!--/ pricing-box 2 -->
	                                </div>
	                            </div>
								<!-- End: pricing item 2-->
								<!-- pricing item 3-->
	                            <div class="item singCarousel">
	                                 <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
	                                    <!-- pricing-box 3 -->
	                                    <div class="pricing-box">
	                                        <h3>Sports Committee</h3>
	                                        <ul class="pricing-features">
	                                        	<li>Regular Practice</li>
												<li>Inter-Class Tournaments</li>
												<li>Inter-Department Tournaments</li>
											</ul><br>
											<!-- <a class="btn btn-chos hvr-bounce-to-left" href="#" title="Buy Now">View Details</a> -->
	                                    </div><!--/ pricing-box 3 -->
	                                </div>
	                            </div>
								<!-- End: pricing item 3-->
	                        </div>
	                        <div class="arrow-indicator clientCont">
	                            <a class="next" data-slide="prev" href="#committees"><i class="fa fa-angle-left"></i></a> <a class="prev" data-slide="next" href="#committees"><i class=
	                            "fa fa-angle-right"></i></a>
	                        </div>
	                    </div><!-- Testimonial-->
	                </div><!--/ Title -->
	            </div><!--/.col-lg-6-->
	        </div><!--/.row-->
		</div>
    </div><!--/.container-->
</section>
<!-- End: Testimonial Section 
==================================================-->

 
 
<!-- Start:Blog Section 
==================================================--> 
<section class="blog-section" id="events">
    <!-- container -->
    <div class="container">
	    <!-- Start: Heading -->
		<div class="section-header">
			<h2><small>Whats new!</small>Recent Events</h2>
		</div><!-- End:  heading -->	
	
        <div class="blog-post row">
		    <!-- blog post 1 -->
            <div class="col-lg-6 col-sm-5 col-xs-12">
				<div class="blog-thumb_1">
					<div class="blog-thumb-img">
					    <img alt="post" src="images/blog/blog-4.jpg">	
                    </div><!--/ blog thumb-->			
					<div class="single-post-left">								
					   <a href="events.php#events" class="readmore" title="View All Events">View All Events <span class="arrow_right"></span> </a>
					</div><!-- post /- -->
				</div>
            </div>
			<!--/ End: blog post 1 -->
			<!-- col-lg-6 -->
			<div class="col-lg-6 col-sm-7 col-xs-12">
				<div class="row">
				<?php
				$sql = "SELECT * FROM events_record where id!='0' group by id DESC limit 0,3 ";
	$result = $conn->query($sql);

if ($result->num_rows >0) {
	// output data of each row
	   
      
    while($row = $result->fetch_assoc()) {
		?>
					<div class="col-lg-12 col-sm-12 col-xs-12">
					    <div class="blog-warp">
						<!-- post -->
						<div class="single-post">						
							<div class="single-post-warper">
								<div class="blog-foot">
								   <a> <span class="date-sty"><?php echo $row['day'];?></span>/ <?php echo $row['month']; ?> , <?php echo $row['year'];?> </a>
								</div>								
								<div class="blog-content">
									<a class="entry-title"><?php echo $row['name'];?></a>
								</div>							
							</div><!-- post /- -->
						</div><!-- post /- -->
						<div class="blog-thumb">
							<img alt="post" src="<?php echo $row['image'];?>">	
						</div><!--/ blog thumb-->
					    </div>
					</div>
<?php
	}
}
?>
				
					<!--/ End: blog post 4-->
				</div>
			</div>
        </div>
		<!--/ .blog-post  .row -->
    </div>
    <div style="text-align: center;">
		<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="events.php" title="View All Events"> View All Events</a>
	</div>
	<!-- container /- -->
</section>	
<!-- End: Blog Section 
==================================================--> 


<!-- Start: Team Section 
==================================================-->  
<section class="team-section" id="team">
    <div class="container">
	    <!-- Start: Heading -->
		<div class="section-header">
			<h2><small>Meet the team</small>Team Members </h2>
			 <p>We have more than 100 members in TSS which are divided into groups depending upon their area of interest and capabilites. </p>
		</div><!-- End:  heading -->
        <div class="row"> 
<?php
				$sql = "SELECT * FROM team_record where id!='0' order by level asc";
	$result = $conn->query($sql);

if ($result->num_rows >0) {
	// output data of each row
	   
      
    while($row = $result->fetch_assoc()) {
		
	$fb= $row["fb_link"];
	$insta=  $row["insta_link"];
	$link=  $row["linkedin"];
	$youtube=  $row["youtube"];
		?>		
        	<div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="member">
                    <div class="img">
                        <img alt="team" class="img-responsive" src="<?php echo $row["image"];?>">
                        <div class="info">
                            <h6><?php echo $row["name"];?></h6>
                            <p><?php echo $row["post"];?></p>
                            <ul class="social list-inline">
							<?php  if(!empty ($fb)){?>
                                <li>                       
                                    <a href="<?php echo $fb; ?>" title="Follow Me on Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
							<?php }
							if(!empty ($insta)){?>
                                <li>
                                    <a href="<?php echo $insta; ?>" title="Follow Me on Instagram"><i class="fa fa-instagram"></i></a>
                                </li>
								<?php }
							if(!empty ($link)){?>
                                <li>
                                    <a href="<?php echo $link; ?>" title="Follow Me on LinkedIn"><i class="fa fa-linkedin"></i></a>
                                </li>
								<?php }
							if(!empty ($youtube)){?>
                                <li>
                                    <a href="<?php echo $youtube; ?>" title="Follow Me on Youtube"><i class="fa fa-youtube"></i></a>
                                </li>
							<?php
							}
	?>
                            </ul>                             </li>
                          
                        </div>
                    </div>
                </div>
            </div>
			<?php
	}
}
else
{
	echo "<center><h1 style='color:black;'>No such record exists.. sorry :(</h1></center>";
}
?>
		<!---/.row -->
    </div>
	<!--/.container -->
</section>
<!-- End:Team Section 
==================================================-->	
		
<!-- Start: contact  Section 
==================================================-->  
<section id="contact" class="get-touch-section">
	<div class="container">
	  <div class="row">
		<div class="col-lg-7 col-sm-7 get-touch-text">
			<div class="get-touch-warper">
					<h3 class="hs1">Have a message for us?</h3>
					<h4 class="lp5">Feel free to suggest anything and everything.</h4>	
			</div>
		</div>
		<div class="col-lg-5 col-sm-5 get-touch-button">
			<a class="btn-bg-white btn-size-3 typeform-share button" href="https://codewarriors.typeform.com/to/brpiyA" target="_blank" data-mode="2" title="Contact Us">CONTACT US</a>
			<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){}})()</script>
		</div>
	 </div>
	</div>
</section>
<!--End Contact Section
==================================================--> 

<!-- Start : Footer Section
==================================================--> 
<footer class="footer-section">
	<div class="footer-section-1">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-5 text-left">
					<div class="footer-social-links">
						<ul>
							<li class="hvr-push"><a targer="_blank" href="https://www.facebook.com/tssgndu" class="fa fa-facebook"></a></li>
							<li class="hvr-push"><a targer="_blank" href="https://www.twitter.com/gndutss" class="fa fa-twitter"></a></li>
							<li class="hvr-push"><a targer="_blank" href="https://www.linkedin.com/in/technicalstudentsociety" class="fa fa-linkedin"></a></li>
							<li class="hvr-push"><a targer="_blank" href="https://www.instagram.com/tss_gndu/" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<!-- End: social-links -->
				</div>
				<!-- col-md-4 -->

				<div class="col-md-4 col-sm-5 text-center">
					<div class="footer-creadit">
						<span class="theme_color">TSS</span> © 2016 All Right Reserved<br>Designed by: <a href="http://codewarriors.tssgndu.com"><b>CODE WARRIORS</b></a>
					</div>
				</div>
				<!-- col-md-4 -->
				<script>
				function scropToTop(){
					$('html, body').animate({ scrollTop: 0 }, 'fast');
				}
				</script>
				<div class="col-md-4 col-sm-2 text-right wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
					<a class="scrollup arrow_carrot-up" onclick="scropToTop()" >
					</a>
				</div>
				<!-- col-md-4 -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>  
	<!-- footer-section-1 -->
</footer>
<!-- End:Footer Section 
========================================-->

	
<!-- Scripts
========================================-->
<!-- jquery -->
<script src="js/vendor/jquery-1.12.0.min.js" type="text/javascript" ></script>
<!-- plugins -->
<script src="js/plugins.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script> 
<!-- Use For Animation -->
<script src="js/wow.min.js"></script>
<!-- Use For carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Use For mixitup gallery -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- Use For Animated Header -->
<script src="js/animatedheader.js"></script>
<!-- Use For Image Peview -->
 <script src="js/jquery.prettyPhoto.js"></script>
<!-- Use For single Page Nav -->
<script src="js/jquery.singlePageNav.min.js"></script>
<!-- Use For nivo slider -->
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="js/nivo-home.js" type="text/javascript"></script>
<!-- Use For jquery Easing -->
<script src="js/jquery.easing.js"></script>
<!--fswit Switcher   -->
<script src="js/fswit.js"></script>
<!-- Custom Scripts
========================================-->
<script src="js/main.js"></script>

</body>
</html>