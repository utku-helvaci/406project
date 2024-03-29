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
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:utku.helvaci.tux@gmail.com.in">utku.helvaci.tux@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+90 5338318223</li>	
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post" style="display:inline-flex;">
									<input type="search" class="search_txt" id="search_txt" name="Search" placeholder=" " required=" " />
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
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Reser<span>vation</span><p class="logo_w3l_agile_caption">&nbsp;&nbsp;reservation service </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item "><a href="home.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="categories.php?cate=guest" class="menu__link scroll">Categories</a></li>
							<li class="menu__item menu__item--current"><a href="#" class="menu__link scroll">Details</a></li>

							<li class="menu__item"><a href="logout.php" class="menu__link scroll">Logout</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		
	</div>	
	<!-- //banner --> 
<!--//Header-->


<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">		 

		 		<?php 
		 		$get = $_GET['detail'] ;
		 		// var_dump($get) ;
		 		$sql = "SELECT	type FROM room WHERE id = '".$get."' " ;
		 		$cate = mysqli_query($con, $sql) ;
		 		$cate_name = mysqli_fetch_assoc($cate)['type'] ;
		    	?>
	        	<h3 class="title-w3-agileits title-black-wthree">Our <?php echo $cate_name ; ?></h3>
	        	<?php
		 		
		 		$sql = "SELECT	* FROM room WHERE id = '".$get."' " ;
		 		$cate = mysqli_query($con, $sql) ;
			    if(mysqli_num_rows($cate)>0){
			    	
			        while ($rs = mysqli_fetch_assoc($cate)) {			        	
			        	$ids = $rs['id'] ;
			        	$img = $rs['img_url'] ;
			        	$title = $rs['type'] ;		
			        	$comment = $rs['comment']	        	 ;
			   				 		
		 		?>
				
					<div class="col-md-4 gallery-grid gallery1">
						<a href="detail.php?=<?php echo $ids ; ?>" class=""><img src="<?php echo $img ; ?>" class="img-responsive" alt="/">
							<div class="textbox">
							<h4><?php echo $title ; ?></h4>
								<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
							</div>
					</a>
					</div>
					<div class="col-md-8 gallery-grid gallery1" >
						<h3><b><span style="font-family: Arial, Helvetica"><?php echo $comment ; ?></span></b></h3>
						<div class="col-md-12">
							<div class="text-center price-selet">
								<a href="admin/reservation.php" >Reserve Now</a>
							</div>
						</div>
					</div>

				<?php 
				}}
				?>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
<!-- /contact -->

<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

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
				<script defer src="js/jquery.flexslider.js"></script>
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
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


