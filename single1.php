<?php
include('productcrud.php');
$obj = new productcrud();
$list = $obj->readProducts();
if($list){
    foreach($list as $item){
        $content= "";
        foreach($item as $key => $value){
            $content = $content . $key . ":".$value."<br>";

        }
        
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<title>Gao King</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Present &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="CSS/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="CSS/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="CSS/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="CSS/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="CSS/flexslider.css">

	<link rel="stylesheet" href="CSS/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
	
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">Instagram</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="signup.php">Sign up</a>
    </li>
	
  <form class="form-inline" action="/action_page.php" >
    <input class="form-control mr-sm-3" type="text" placeholder="Search">
    <button class="btn btn-dark" type="submit">Search</button>
  </form>

  </ul>
</nav>
		<header id="fh5co-header" role="banner">
			<div class="container text-center">
				<div id="fh5co-logo">
					<a href="index1.php"><img src="img/logo.jpg" alt="Present Free HTML5 Bootstrap Template"></a>
				</div>
			
			</div>
		</header>
		<!-- END #fh5co-header -->

		<div class="page-content">
			<h1 class="mb0">Gao King <button class="btn btn-light" type="submit">To cart</button>  </h1> 
			<div class="meta"><span> <a href="#"><?php echo$item["price"] ?>vnđ </a> </span></div>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quaerat nostrum, neque cum, quidem inventore consequatur sunt optio sint! Veritatis maiores recusandae dolores nihil cumque, eaque eius obcaecati voluptatum necessitatibus.</p>
			<p><img src="img/image02.png" alt="Free HTML5 by FreeHTML5.co"></p>
			<p><img src="img/image02.png" alt="Free HTML5 by FreeHTML5.co"></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi saepe officia, consectetur praesentium minus reiciendis, accusamus consequuntur iusto ad illum quibusdam commodi facere tenetur. Culpa quia laborum quam, sint laboriosam delectus veniam, at molestiae magnam iusto similique dolorem ea doloremque!</p>
			<p><img src="img/image02.png" alt="Free HTML5 by FreeHTML5.co"></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi saepe officia, consectetur praesentium minus reiciendis, accusamus consequuntur iusto ad illum quibusdam commodi facere tenetur. Culpa quia laborum quam, sint laboriosam delectus veniam, at molestiae magnam iusto similique dolorem ea doloremque!</p>
			<p>Ullam recusandae error odit eveniet soluta temporibus quis mollitia dignissimos quasi, magni culpa sed, minima atque quae a vitae dolores, illo cum sint! Quaerat rem incidunt nihil laborum nulla placeat soluta, fugit dolor aperiam facere itaque laboriosam error ratione praesentium.</p>
		</div>

		<div class="container-fluid">
			<div id="fh5co-projects-feed" class="fh5co-projects-feed clearfix masonry">
				<div class="fh5co-project masonry-brick">
				<?php foreach($list as $item) {?>
				
				<div class="fh5co-project masonry-brick">
					<a href="single.html">
					<img src="img\<?=$item['image']?>"width="290" height="340"/>
						<h2><?php echo$item["name"] ?></h2>
					</a>
				</div>
					<?php } ?>
				</div>
				
			</div>
			<!--END .fh5co-projects-feed-->
		</div>
		<!-- END .container-fluid -->

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="footer-content">
					<div class="copyright"><small>&copy; 2016 Present. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co/">FreeHTML5.co</a> Images: <a href="http://graphicburger.com/">GraphicBurger</a></small></div>
					<div class="social">
						<a href="#"><i class="icon-facebook3"></i></a>
						<a href="#"><i class="icon-instagram2"></i></a>
						<a href="#"><i class="icon-linkedin2"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
		
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- masonry -->
	<script src="js/jquery.masonry.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

