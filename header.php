
<!DOCTYPE html>
<html>
<head>
<title>Magazine</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pets Love Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'><!-- //fonts -->

	<!-- start-smoth-scrolling -->
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
	<!-- start-smoth-scrolling -->
		<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

</head>
<body>
<div class="header wow fadeInDown animated" data-wow-delay=".5s">
	<div class="container">
		<div class="header-left grid">
			<div class="grid__item color-1 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
				<h1><a href="index.php"><span class="link link--kukuri" ><img src="images/logo.jpg" width="200px" height="75px"></span></a></h1>
			</div>
		</div>
		<div class="header-middle">
			<ul>
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner">
	<div class="ban-top ">
		<div class="container">
			<div class="ban-top-con">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav menu__list">
						<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
						<li class=" menu__item"><a class="menu__link" href="latest_magazine.php">This Month</a></li>
						<li class=" menu__item"><a class="menu__link" href="gallery.php">Gallery</a></li>
						<li class=" menu__item"><a class="menu__link" href="previews_magazine.php"> Previews Magazine </a></li>
						<li class=" menu__item"><a class="menu__link" href="contact_us.php">contact</a></li>
						<li class=" menu__item"><a class="menu__link" href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
					  </ul>
					</div>
					<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Form</h4>
            </div>
            <br>
                <!--div class="bg-danger text-center" id="success-message" style="padding: 10px; margin: 10px;"></div-->
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-1"></div>
                    <label class="col-md-3 control-lable" for="username">User Name<span class="imp">*</span></label>
                    <div class="col-md-7">
                        <input type="text" name="username" id="username" placeholder="User Name"  class="form-control input-sm"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-1"></div>
                    <label class="col-md-3 control-lable" for="password">Password<span class="imp">*</span></label>
                    <div class="col-md-7">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control input-sm"/>
                    </div>
                </div>
            </div>
			
            <div class="modal-footer"><span class="fls"> <a href="#">New Register</a> </span>
                <button type="button" onclick="forgot()" class="btn btn-primary btn-lg">Login</button>
            </div>
        </div>

    </div>
</div>
				  </div>
				</nav>	
			</div>
			<div class="top_nav_right">
				<ul>
					<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
					
				</ul>	
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="ban-bot text-center">
		<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
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
				<div class="container">
				<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
				<img class="img-responsive banner_left" src="images/bible.gif" alt="Bible" width="500px" height="300px">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="ban-info">
						<h3>Father, forgive them, for they do not know what they do</h3>
						<p>Gospel of Luke 23:34</p>
						<a class="hvr-rectangle-out" href="about.html">See More</a>
					</div>		
				</li>
				<li>
					<div class="ban-info">
						<h3>Truly, I say to you, today you will be with me in Paradise</h3>
						<p>Gospel of Luke 23:43</p>
						<a class="hvr-rectangle-out" href="about.html">See More</a>
					</div>		
				</li>
				<li>
					<div class="ban-info">
						<h3> My God, my God, why have you forsaken me?</h3>
						<p>Matthew 27:46 and Mark 15:34</p>
						<a class="hvr-rectangle-out" href="about.html">See More</a>
					</div>		
				</li>			
			</ul>
		</div></div></div></div>
		<div class="clearfix"></div>
	</div>
</div>