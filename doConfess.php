<?php
include('config.php'); 
$un=$_GET["user"];
                        $conn = new mysqli($servername, $musername, $mpassword, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    
                     $sql="SELECT name,email,username FROM user WHERE  username='$un' limit 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $name =$row["name"];
                           $mail =$row["email"];
                           $username=$row["username"];
                        }
                    } else {
                         header("Location: 404.html");
                    }

                    $conn->close();
                    
                    
                    
                    
                    
                     try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $musername, $mpassword);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql2="update counter set times=times+1 where page='".$username."'";
                $conn1->exec($sql2);
    }
    catch(PDOException $e)
    {
    echo $sql2 . "<br>" . $e->getMessage();
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
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $name; ?></title>
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
 
    <div id="contact" class="contact">
		<div class="container">   <div id="output">
			<div class="agileits-title"> 
				<div class="agileits-title-left">
					<h6>-Write a message for</h6>
					<h3><i class="fa fa-user" aria-hidden="true"></i> <?php echo $name; ?></h3>
				</div>
				<div class="agileits-title-right">
					<p class="para">http://confess.shadowsoft.esy.es/<?php echo $username; ?></p>
				</div>
				<div class="clearfix"> </div>
			</div>  
			<div class="contact-w3ls-row">
				<form action="send.php" method="post" id="msgs">
					<div class="col-md-12 col-sm-12 contact-right agileits-w3layouts">
                                            <input type="hidden" name="un" id="un" value="<?php echo $username;?>">
                                            <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
                                            <input type="hidden" name="email" id="email" value="<?php echo $mail;?>">
                                            <textarea name="msg" id="msg"  placeholder="Start Writting confession for <?php echo $name; ?>" required=""></textarea>
                                                <input type="submit" value="Send Confession to <?php echo $name; ?>">
					</div>
					
						
						
					 
					<div class="clearfix"> </div> 
				</form>
			</div>  
		</div>
                </div>
	</div>

	<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content--> <form action="auth.php" method="post">
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

                                                          <input type="password" class="form-control" id="pwd" name="email" placeholder="Create Password" required>
                                                 </div>
                                  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                  
                                    </div>
				</div>    </form>
				<!-- //Modal content-->
			</div>
		</div>
        		<div class="modal fade" id="login" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content--> <form action="auth.php" method="post">
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
	
	<!-- //contact -->
        
<div class="footer-w3layouts">
		<div class="footer-top-agile">
		<h6><a href="index.html"><span>Confess</span><i>Now</i></a></h6>
		
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
        <script>
//    $("#msgs").submit(function(event) 
//     {
//         /* stop form from submitting normally */
//         event.preventDefault();
//
//         /* get some values from elements on the page: */
//         var $form = $( this ),
//             un_value = $form.find( 'input[name="un"]' ).val(),
//             Message_val = $form.find( 'input[name="Message"]' ).val(),
//             url = $form.attr('action');
//
//         /* Send the data using post */
//         var posting = $.post( url, { 
//                           un : un_value,
//                           Message : Message_val
//                       });
//
//         posting.done(function( data )
//         {
//             /* Put the results in a div */
//        $( "#output" ).html(data);
//     
//         });
//    });
</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>

