<?php
session_start();
if($_SESSION["LoggedIn"]=="yes"){
    $un=$_SESSION["user"];
    include('config.php');    
                        $conn = new mysqli($servername, $musername, $mpassword, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    
                     $sql="SELECT name,username FROM user WHERE email='$un' or username='$un' limit 1";
                   
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $name =$row["name"];
                            $username =$row["username"];
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                    
                  $conn1 = new mysqli($servername, $musername, $mpassword, $dbname);
                    // Check connection
                    if ($conn1->connect_error) {
                        die("Connection failed: " . $conn1->connect_error);
                    } 

                    
                     $sql1="SELECT id FROM ".$username." order by id desc limit 1";
                    $result1 = $conn1->query($sql1);

                    if ($result1->num_rows > 0) {
                        // output data of each row
                        while($row = $result1->fetch_assoc()) {
                            $id =$row["id"];
                           
                        }
                    } else {
                        $id =0;
                    }

                    $conn1->close();
}
    else{
 header("Location: ");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Confess Out Anonymously, Confession, confess, Anonymous, 
prafful, lachhwani, prafful lachhwani, shadow softwares" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/comment.css" type="text/css" rel="stylesheet" media="all">   
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
                <div class="modal fade" id="copy" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content-->  
				<div class="modal-content">
			             <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3><i class="fa fa-files-o" aria-hidden="true"></i> Copy Link To Clipboard</h3>
                                                <input type="hidden" value="http://confess.shadowsoft.esy.es/<?php echo $username;?>" id="link" name="link">
                                                <br>
                                                 <center>  <b> <p class="para">  http://confess.shadowsoft.esy.es/<?php echo $username;?></p></b>
                                                 
                                  
                                      </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" onclick="myFunction()" data-dismiss="modal">Copy Link</button>
                                     
                                    </div>
                                </div>
				<!-- //Modal content-->
			</div>
		</div>
    
                    <div class="modal fade" id="share" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content-->  
				<div class="modal-content">
			             <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3><i class="fa fa-share-alt" aria-hidden="true"></i> Share your profile link</h3>
                                                
                                                <br>
                                                 
                                                     <b> 
                                                         <p class="para">Sorry Your Browser Does not support share feature :(<br>TIP: Copy your link from your profile manually and share to your friend.</p>
                                                     </b>
                                                 
                                  
                                      </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondry" data-dismiss="modal">Close</button>
                                     
                                    </div>
                                </div>
				<!-- //Modal content-->
			</div>
		</div>
    
    <div class="modal fade" id="reply" tabindex="-1" role="dialog">
			<div class="modal-dialog">
                            <!-- Modal content-->  
				<div class="modal-content">
			             <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;Reply to confessor</h3>
                                                
                                                <br>
                                                 
                                                     <b> 
                                                         <p class="para">Sorry the confessor is not the registered user so we can't inform him/her that you replied
                                                             <br>TIP: Take Screenshot of this confession and post it on social with your Reply as caption :)</p>
                                                     </b>
                                                 
                                  
                                      </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondry" data-dismiss="modal">Close</button>
                                     
                                    </div>
                                </div>
				<!-- //Modal content-->
			</div>
		</div>
	<div class="container">
			<div class="agileits-title"> 
                            <br><div class="agileits-title-left">
                                    <h3><i class="fa fa-user" aria-hidden="true"></i><?php echo $name;?></h3>
				</div>
				<div class="agileits-title-right">
                                    <p class="para">  http://confess.shadowsoft.esy.es/<?php echo $username;?></p>
                                       <h3> <a href="#" data-toggle="modal" data-target="#share">
                                               <i class="fa fa-share-alt" aria-hidden="true"></i>
                                           </a>&nbsp;&nbsp;
                                           <a href="http://confess.shadowsoft.esy.es/<?php echo $username;?>">
                                               <i class="fa fa-link" aria-hidden="true"></i>
                                           </a>&nbsp;&nbsp;
                                           <a href="#" data-toggle="modal" data-target="#copy">
                                               <i class="fa fa-files-o" aria-hidden="true"></i>
                                           </a>
                                       </h3>
                                   
				</div>
				<div class="clearfix"> </div>
			</div>  
        </div>
    
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<div class="container">
    <div class="row">
      
        <?php  
        $conn = new mysqli($servername, $musername, $mpassword, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    
                     $sql="SELECT message,date FROM ".$username;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '
        <div class="col-sm-8">
            <h4><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Confessions to you are....</h4><br>
        </div>';
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                             echo '<div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                        <img src="images/an.png" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b>Anonymous</b></a>
                            confessed.
                        </div>
                        <h6 class="text-muted time">'.$row["date"].'</h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p>'.$row["message"].'</p><br>
                     <a href="#" class="btn btn-default stat-item" data-toggle="modal" data-target="#reply">
                        <i class="fa fa-reply" aria-hidden="true"></i>&nbsp;Reply
                        </a>
                </div>
            </div>
        </div>';
                        }
                    } else {
                        echo '    <div class="container">
   <div class="alert alert-warning">
         <h4> You have not recieved any confession yet :( <br><br><strong>TIP!</strong> Share Your confession URL as much as you can</h4>
  </div>
    </div>';

                    }

                    $conn->close();



?>  
    </div>
</div>

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
					<div class="col-md-12 col-sm-12 contact-right agileits-w3layouts">
						<textarea name="Message" placeholder="Message" required=""></textarea>
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

<script>
function myFunction() {
  var copyText = document.getElementById("link");
  copyText.select();
  document.execCommand("Copy");
  alert("Copied Link: " + copyText.value);
}
</script>
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