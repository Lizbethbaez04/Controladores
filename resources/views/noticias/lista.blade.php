<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <title>Noticias</title>
</head>
<body>
   <div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
			</figure>
			<h3 class="heading">About Me</h3>
			<h2>Emily Tran Le</h2>
			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			<ul class="fh5co-social">
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">Categories</h3>
				<ul>
					<li><a href="#">Travel</a></li>
					<li><a href="#">Style</a></li>
					<li><a href="#">Photography</a></li>
					<li><a href="#">Food &amp; Drinks</a></li>
					<li><a href="#">Culture</a></li>
				</ul>
			</div>
			<div class="fh5co-box">
				<h3 class="heading">Search</h3>
				<form action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Type a keyword">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button class="btn btn-secondary btn-sm" type="submit">Cerrar sesión</button>
                        </form>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END #fh5co-offcanvas -->
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<!--<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>-->
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo">El Chismoso</h1>
				</div>
			</div>		
		</div>

	</header>
	<!-- END #fh5co-header -->
    @foreach($noticias as $noticia)
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<article class="col-lg-3 col-md-3 col-sm-3 animate-box">                
				<figure>
                    <a href="{{route("noticias.detalles",$noticia->id)}}"><img src="images/pic_1.jpg" alt="Image" class="img-responsive"></a>
				</figure>
				<span class="fh5co-meta"><a href="#">{{ $noticia->autor }}</a></span>
				<h2 class="fh5co-article-title"><a href="{{route("noticias.detalles",$noticia->id)}}">{{ $noticia->titulo }}</a></h2>
				<span class="fh5co-meta fh5co-date">{{ $noticia->fecha }}</span>
			</article>			
		</div>
	</div>
    @endforeach

	<footer id="fh5co-footer">
		<p><small>&copy; 2016.El Chismoso noticias. </p>
	</footer>

    
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
    
</body>
</html>