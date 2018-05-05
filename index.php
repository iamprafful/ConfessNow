<?php
include('config.php');
      try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $musername, $mpassword);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="update counter set times=times+1 where page='index'";
                $conn1->exec($sql);
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    function get_client_ip() {
//Just get the headers if we can or else use the SERVER global
		if ( function_exists( 'apache_request_headers' ) ) {
			$headers = apache_request_headers();
		} else {
			$headers = $_SERVER;
		}
		//Get the forwarded IP if it exists
		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
			$the_ip = $headers['X-Forwarded-For'];
		} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
		) {
			$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
		} else {
			
			$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
		}
		return $the_ip;
}
$ip= get_client_ip();
try {
    $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $musername, $mpassword);
    // set the PDO error mode to exception
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql2="insert into index_visitor_ip(ip,date) values('".$ip."',sysdate())";
                $conn2->exec($sql2);
    }
    catch(PDOException $e)
    {
    echo $sql2 . "<br>" . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Confess Now Anonymously</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Confess Out Anonymously, Confession, confess, Anonymous, 
prafful, lachhwani, prafful lachhwani, shadow softwares" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/slider.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<!-- banner -->
	<div class="banner" id="home"> 
		<div class="cd-radial-slider-wrapper"> 
                    <div class="top_header" style="position: fixed;">
                       <nav class="navbar navbar-default">
						<div class="navbar-header navbar-left">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a class="navbar-brand" href="index.php"><span>Confess</span><i>Now</i></a></h1>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li><a href="#about" class="scroll"><span data-hover="About US">About US</span></a></li>
                                                                        <li><a href="#" class="scroll" data-toggle="modal" data-target="#myModal"><span data-hover="Sign&nbsp;UP">Sign UP</span></a></li>
									<!--<li class="dropdown">
										<a href="#" class="dropdown-toggle scroll" data-toggle="dropdown"><span data-hover="Sections">Sections</span> <b class="caret"></b></a>
										<ul class="dropdown-menu agile_short_dropdown">
											<li><a href="#services" class="scroll">Services</a></li>
											<li><a href="#clients" class="scroll">Clients</a></li>
										</ul>
									</li>-->
                                                                        <li><a href="#" class="scroll" data-toggle="modal" data-target="#login"><span data-hover="Login">Login</span></a></li>
									<li><a href="#contact" class="scroll"><span data-hover="Contact">Contact</span></a></li>
								</ul>
							</nav>
						</div>
						<!-- cd-search -->
									<div class="cd-main-header">
										<ul class="cd-header-buttons">
											<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
										</ul> <!-- cd-header-buttons -->
									</div>  
									<div id="cd-search" class="cd-search agileinfo">
										<form action="#" method="post">
											<input name="Search" type="search" placeholder="Click enter after typing...">
										</form>
									</div> 
									<!-- //cd-search -->
					</nav>

		   </div>
         <!-- //header -->	
			<ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
				<li class="visible"> 
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title></title>
							<defs>
								<clipPath id="cd-image-1">
									<circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
								</clipPath>
							</defs> 
							<image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="images/3.jpg"></image>
						</svg>
					</div> <!-- .svg-wrapper --> 
					<div class="cd-radial-slider-content">
						<div class="wrapper">
							<div>
								<h3>Anonymous</h3><h4><font color="#fcd000">Confess without revealing your Identity </font></h4>
								<a href="#about" class="hvr-bounce-to-right read scroll">Read More</a>
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li> 
				<li class="next-slide">
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title></title>
							<defs>
								<clipPath id="cd-image-2">
									<circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
								</clipPath>
							</defs> 
							<image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="images/3.jpg"></image>
						</svg>
					</div> <!-- .svg-wrapper --> 
					<div class="cd-radial-slider-content">
						<div class="wrapper">
							<div> 
								<h3>Feedback</h3><h4><font color="#fcd000">Give Feedback to your family & friends</font></h4>
								<a href="#about" class="hvr-bounce-to-right read scroll">Read More</a>
								
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li> 
				<li class="prev-slide">
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title></title>
							<defs>
								<clipPath id="cd-image-3">
									<circle id="cd-circle-3" cx="110" cy="400" r="60"/>
								</clipPath>
							</defs> 
							<image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="images/3.jpg"></image>
						</svg>
					</div> <!-- .svg-wrapper --> 
					<div class="cd-radial-slider-content">
						<div class="wrapper">
							<div> 
								<h3>Reply</h3><h4><font color="#fcd000">Appreciate them for giving feedback</font></h4>
								<a href="#about" class="hvr-bounce-to-right read scroll">Read More</a>
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li> 
				
			</ul> <!-- .cd-radial-slider --> 
			<ul class="cd-radial-slider-navigation">
				<li><a href="#0" class="next">Next</a></li>
				<li><a href="#0" class="prev">Prev</a></li>
			</ul> <!-- .cd-radial-slider-navigation -->
		</div> <!-- .cd-radial-slider-wrapper --> 
	</div>
	<!-- //banner --> 
	<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content--><form action="register.php" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3><i class="fa fa-user" aria-hidden="true"></i> Sign UP</h3><br>
                                                
                                                

                                                 <div class="form-row">

                                                    <div class="form-group col-md-6">

                                                        <input type="text" class="form-control" id="FName" name="FName" placeholder="First Name" required>
                                                    </div>
                                                    <div class="form-group col-md-6">

                                                        <input type="text" class="form-control" id="LName" name="LName" placeholder="Last Name" required>
                                                    </div>
                                                     
                                                  </div>
                                                <div class="form-group col-md-12">

                                                          <input type="text" class="form-control" id="UName" name="UName" placeholder="Choose Username" required>
                                                      </div>
                                                <div class="form-group col-md-12">

                                                          <input type="Email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                                 </div>
                                                <div class="form-group col-md-12">

                                                          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Create Password" required>
                                                 </div>
                                  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                     
                                    </div>
                                </div></form>
				<!-- //Modal content-->
			</div>
		</div>
        		<div class="modal fade" id="login" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content-->  <form method="post" action="auth.php">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3><i class="fa fa-user" aria-hidden="true"></i> Log IN</h3><br>
                                                
                                              

                                                 <div class="form-row">

                                                    <div class="form-group col-md-6">

                                                        <input type="text" class="form-control" id="un" name="un" placeholder="Username/Email" required>
                                                    </div>
                                                    <div class="form-group col-md-6">

                                                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
                                                    </div>
                                                     
                                                  </div>
                                  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Log IN</button>
                                     
                                    </div>
                                </div></form>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->

	<!-- about -->
	<div class="about" id="about"> 
		<div class="container"> 
			<div class="agileits-title"> 
				<div class="agileits-title-left">
					<h6>- Welcome to</h6>
					<h3>Confess Now</h3>
				</div>
				<div class="agileits-title-right">
					<p class="para">Confess to somebody without letting them know about your Identity</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			 <div class="wthree-about">
				  <div class="col-md-5 wthree-ab-left">
				      <img src="images/ab.png" class="responsive" alt=" " />
                  </div>
				  <div class="col-md-7 wthree-ab-right">
				     <h4>How to confess?</h4>
				     <p>Want to share your thought to someone but can't then you can use confess now we will not show your identity to the recipient as well as you can get the reply from them also. Signup from below button and get started</p>
					 
					 <a href="#" class="read2 hvr-bounce-to-right" data-toggle="modal" data-target="#myModal">Sign UP</a>
                                         <a href="#" class="read2 hvr-bounce-to-right" data-toggle="modal" data-target="#login">Log IN</a>

					
				  </div>
				  <div class="clearfix"></div>
			 </div>
		</div>
	</div>

<!-- //feedback -->

	<!-- contact -->
	<div id="contact" class="contact">
		<div class="container">
			<div class="agileits-title"> 
				<div class="agileits-title-left">
					<h6>-Write a message</h6>
					<h3>Contact Us</h3>
				</div>
				<div class="agileits-title-right">
					<p class="para">Now its your turn to give us feedback so that we could improve our services.</p>
				</div>
				<div class="clearfix"> </div>
			</div>  
			<div class="contact-w3ls-row">
				<form action="#" method="post">
					<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
						<textarea name="Message" placeholder="Message" required=""></textarea>
					</div>
					<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
						<input type="text" name="First Name" placeholder="First Name" required="">
						<input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
						<input type="text" name="Number" placeholder="Mobile Number" required="">
						<input class="email" name="Email" type="email" placeholder="Email" required="">
						<input type="submit" value="SUBMIT">
					</div> 
					<div class="clearfix"> </div> 
				</form>
			</div>  
		</div>
	</div>
	<!-- //contact -->
        
<div class="footer-w3layouts">
		<div class="footer-top-agile">
		<h6><a href="index.php"><span>Confess</span><i>Now</i></a></h6>
		
		</div>
		<div class="subscribe-grid">
		<h5>Subscribe for our latest updates</h5>
		<p>We will never send you <span>spam</span> mails</p>
					<form action="#" method="post">
						<input type="email" placeholder="Subscribe" name="Subscribe" required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					</form>
				</div>
		<div class="footer-bottom-wthree">
			<div class="copyright-wthree">
				<p>&copy; 2018 Confess Now . All Rights Reserved | Design by <a href="http://shadowsoft.esy.es/"> Shadow Softwares </a></p>
			      <!--  <div class="wthree-icon footer">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						</div> -->
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
<!-- //Footer -->

	<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->	
	<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
			<script>
				$(function(){
					var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
				});
			</script>  
<!-- script for responsive tabs -->		
	<!-- search jQuery -->
	<script src="js/search.js"></script>
	<!-- //search jQuery --> 
	<script src="js/snap.svg-min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->   
	<!-- smooth-scrolling-of-move-up -->
	<!-- carousel -->
<script src="js/owl.carousel.js"></script>
	<script>
	$(document).ready(function() {
	  $("#owl-demo").owlCarousel({
		items :3,
		itemsDesktop : [768,2],
		itemsDesktopSmall : [414,1],
		lazyLoad : true,
		autoPlay : true,
		navigation :true,
		
		navigationText :  false,
		pagination : true,
		
	  });
	  
	});
	</script>
<!-- //carousel -->


	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>

