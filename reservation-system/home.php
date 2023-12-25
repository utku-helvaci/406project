<?php
include('db.php');
// if(isset($_COOKIE["user"]))  
//  {  
//       if($_COOKIE["user"] == "admin"){      
//         header("location: admin/home.php");
//      }
//      else{
//         header("location: home.php");
//      }
//  }  
//  else{
//  	header("location: index.php");
//  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Reservation System</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>

<!-- header -->
<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
						<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
						<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
					<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li>
				</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:utku.helvaci.tux@gmail.com">utku.helvaci.tux@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+90 5338318223</li>
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post" style="display:inline-flex;">
									<input type="search" class="search_txt" id="search_txt" name="Search" placeholder=" " required=" ">
									<input type="submit" class="search_btn" id="search_btn" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default" style="z-index: 1;">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1>
					<a class=".bluebirdlogo" href="index.php" style="color: #e68217;">Reser<span>
					<img src="images/portal.svg" alt=" " class="centerbgimg" aria-hidden="true">
					</span><span>vation²</span><p class="logo_w3l_agile_caption">&nbsp;&nbsp;reservation service </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Categories</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
							<li class="menu__item"><a href="logout.php" class="menu__link scroll">Logout</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
<!-- stole the precious -->
<section class="portfolio-w3ls" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Rooms Nearby</h3>

				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=guest" class=""><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Guest  Houses</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=hotel" class=""><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Hotels</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=apart" class=""><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Apartments</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=dorms" class=""><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Dorms</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=roommate" class=""><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Available Roommates</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=shared" class=""><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Shared Houses</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
	<!-- //banner -->
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">×</button>
										<h4>Reser<span>vation</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>We know what you love</h5>
										<p>Reservation System is the perfect embodiment of world-class service and hospitality.
											With its well-appointed rooms and modern comforts, the hotel has played host to the heads of state,
											celebrities and high profile businessmen from across the world.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">About Us</h3>
						   <p class="about-para-w3ls">Reservation System is the perfect embodiment of world-class service and hospitality.
							With its well-appointed rooms and modern comforts, the hotel has played host to the heads of state, celebrities
							 and high profile businessmen from across the world. Reservation System, a city landmark in Jalgaon, is just
							  60 kms from the finest surviving UNESCO world heritage site Ajanta Caves. Whether you are in Jalgaon for a business
							   trip or visiting elaborated architectural carving in Ajanta, Reservation System offers superbly appointed rooms
							    with classical decor and the ambience make these rooms an ideal choice for the discerning business traveler.
								The Lobby’s Refreshing Décor of Fountain Contrasting Strikingly with Capsule like Glass Elevator, Surrounding
								 the Lobby There Is an Excellent Multi cuisine Restaurant ‘Royal Cook’.</p>
						   <img src="images/all/IMG_20210815_205518.jpg" class="img-responsive" alt="Hair Salon">
						   <hr>
						   <p class="about-para-w3ls"> All rooms include the superior
								 amenities with specific focus for comfort &amp; convenience. For guests’ convenience &amp; entertainment, we have
								 added a wireless broadband internet access facility throughout the premises and also additional TATA SKY HD
								 channels linked to all guest rooms &amp; suites.</p>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->

<!--//sevices-->

<!-- Gallery -->

<!-- //gallery -->
	 <!-- rooms & rates -->
<!-- stolen p2 -->


	 <!--// rooms & rates -->
  <!-- visitors -->





<section id="gallery">



<!-- trial -->
<li>

				<div class="col-md-4 gallery-grid gallery1">
					<a href="categories.php?cate=guest" class=""><img src="images/c1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Guest  Houses</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
</li></section><div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>it was pleasure and having good experience.
									jalgaon's best hotel i have known till date...
									Good breakfast and quality of food is good </p>
								<h5>ayesha wankhede</h5>
								<p>Travel</p>
							</div>




<!-- trial -->



	<div class="w3l-visitors-agile">
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3>
		</div>

	</div>
  <!-- visitors -->
<!-- contact -->

<!-- CRIT -->



<!-- CRIT -->





<section class="contact-w3ls" id="contact" style="padding: 0;">
	<iframe id="result" srcdoc="<!DOCTYPE html>
<html lang=&quot;en&quot; >

<head>
  <meta charset=&quot;UTF-8&quot;>


    <link rel=&quot;apple-touch-icon&quot; type=&quot;image/png&quot; href=&quot;https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png&quot; />

    <meta name=&quot;apple-mobile-web-app-title&quot; content=&quot;CodePen&quot;>

    <link rel=&quot;shortcut icon&quot; type=&quot;image/x-icon&quot; href=&quot;https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico&quot; />

    <link rel=&quot;mask-icon&quot; type=&quot;image/x-icon&quot; href=&quot;https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg&quot; color=&quot;#111&quot; />






  <title>CodePen - CSS Background Effect</title>

    <link rel=&quot;canonical&quot; href=&quot;https://codepen.io/osorina/pen/PQdMOO&quot;>




<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box !important;
}

html, body {
  height: 100%;
}

body {
  display: table;
  width: 100%;
  height: 100%;
  background-color: #171717;
  color: #000;
  line-height: 1.6;
  position: relative;
  font-family: sans-serif;
  overflow: hidden;
}

.lines {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
  margin: auto;
  width: 90vw;
}

.line {
  position: absolute;
  width: 1px;
  height: 100%;
  top: 0;
  left: 50%;
  background: rgba(255, 255, 255, 0.1);
  overflow: hidden;
}
.line::after {
  content: &quot;&quot;;
  display: block;
  position: absolute;
  height: 15vh;
  width: 100%;
  top: -50%;
  left: 0;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 75%, #ffffff 100%);
  -webkit-animation: drop 7s 0s infinite;
          animation: drop 7s 0s infinite;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-timing-function: cubic-bezier(0.4, 0.26, 0, 0.97);
          animation-timing-function: cubic-bezier(0.4, 0.26, 0, 0.97);
}
.line:nth-child(1) {
  margin-left: -25%;
}
.line:nth-child(1)::after {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}
.line:nth-child(3) {
  margin-left: 25%;
}
.line:nth-child(3)::after {
  -webkit-animation-delay: 2.5s;
          animation-delay: 2.5s;
}

@-webkit-keyframes drop {
  0% {
    top: -50%;
  }
  100% {
    top: 110%;
  }
}

@keyframes drop {
  0% {
    top: -50%;
  }
  100% {
    top: 110%;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>



</head>

<body translate=&quot;no&quot;>
  <div class=&quot;lines&quot;>
  <div class=&quot;line&quot;></div>
  <div class=&quot;line&quot;></div>
  <div class=&quot;line&quot;></div>
</div>

<section class=" contact-w3ls"="" style="position: absolute;z-index: 0;width: 100%;height: 100%;">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">

                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>

                    </div>


                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
				</form>
							</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+90 5338318223</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:utku.helvaci.tux@gmail.com">utku.helvaci.tux@gmail.com</a></p>
			<p class="contact-agile1"><strong>Address :</strong> North Cyprus, Magusa, EMU.</p>
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
							</ul>
			</div>
			<div class="col-md-12" style="width: 100%; margin-top: 20px ;">
				<form  enctype="text/plain"  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">

                        <label class="contact-p1"><p>Name:</p></label>
                        <input type="text" placeholder="Enter your Name" class="form-control" name="name" id="name" required >
                        <p class="help-block"></p>

                  </div>
                  <div class="control-group form-group">

                        <label class="contact-p1"><p>Email:</p></label>
                        <input type="email"  placeholder="Enter a valid email address" class="form-control" name="email" id="email" required >
						<p class="help-block"></p>

                  </div>
                  <div class="control-group form-group">

                        <label class="contact-p1"><p>How can we help?</p></label>
                        <textarea type="tel"  class="form-control" name="phone" id="phone" required ></textarea>
						<p class="help-block"></p>

                  </div>

                  <input type="button" onclick="sendEmail()"  name="sub" value="Send Now" class="btn btn-primary">
                    <!-- <a type="button" name="sub" class="btn btn-primary" id="cus_email_send">Send Now</a> -->
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>


</body>

</html>
" sandbox="allow-forms allow-modals allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation allow-downloads allow-presentation" allow="accelerometer; camera; encrypted-media; display-capture; geolocation; gyroscope; microphone; midi; clipboard-read; clipboard-write; web-share" allowtransparency="true" allowpaymentrequest="true" allowfullscreen="true" class="result-iframe">
      </iframe><div class="container" style="position: absolute;z-index: 1;left: 15%;padding-top: 1%;">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form method="post" name="sentMessage" id="contactForm">
					<div class="control-group form-group">

                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required="">
                            <p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required="">
							<p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required="">
							<p class="help-block"></p>

                    </div>


                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
				</form>
							</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+90 5338318223</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:utku.helvaci.tux@gmail.com">utku.helvaci.tux@gmail.com</a></p>
			<p class="contact-agile1"><strong>Address :</strong> North Cyprus, Magusa, EMU.</p>
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
							</ul>
			</div>
			<div class="col-md-12" style="width: 100%; margin-top: 20px ;">
				<form enctype="text/plain" method="post" name="sentMessage" id="contactForm">
					<div class="control-group form-group">

                        <label class="contact-p1"><p>Name:</p></label>
                        <input type="text" placeholder="Enter your Name" class="form-control" name="name" id="name" required="">
                        <p class="help-block"></p>

                  </div>
                  <div class="control-group form-group">

                        <label class="contact-p1"><p>Email:</p></label>
                        <input type="email" placeholder="Enter a valid email address" class="form-control" name="email" id="email" required="">
						<p class="help-block"></p>

                  </div>
                  <div class="control-group form-group">

                        <label class="contact-p1"><p>How can we help?</p></label>
                        <textarea type="tel" class="form-control" name="phone" id="phone" required=""></textarea>
						<p class="help-block"></p>

                  </div>

                  <input type="button" onclick="sendEmail()" name="sub" value="Send Now" class="btn btn-primary">
                    <!-- <a type="button" name="sub" class="btn btn-primary" id="cus_email_send">Send Now</a> -->
				</form>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->

<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<script type="text/javascript" src="js/smtp.js"></script>
<script type="text/javascript">
    function sendEmail() {
        Email.send({
            SecureToken: "security token of your smtp",
            To: "utku.helvaci.tux@gmail.com",
            From: document.getElementById('email').value,
            Subject: "From" + document.getElementById('name').value ,
            Body: document.getElementById('phone').value
        }).then(
            message => alert("mail sent successfully")
        );
    }
</script>

<!-- /contact form -->
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script>
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	// jQuery(document).ready(function($) {
	// 	$(".scroll").click(function(event){
	// 		event.preventDefault();
	// 		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	// 	});
	// });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer="" src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>
<!--//search-bar-->
<!--tabs-->
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
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};

		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>




<a href="#" id="toTop">To Top</a>
</body>
</html>


