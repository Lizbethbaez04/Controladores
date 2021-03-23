<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> @if($noticia != NULL)  {{ $noticia->titulo}} @else  Noticia no encontrada @endif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<link rel="stylesheet" href="/css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>  
        <a href="{{route("noticias")}}" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Volver</span></a>
	<!-- END #fh5co-header -->
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
  @if($noticia != NULL)
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<h2 class="fh5co-article-title animate-box">{{ $noticia->titulo}}</h2>
        <figure class="animate-box">
        @if($noticia->foto != NULL)
					<img src="/images/single_1.jpg" alt="Image" class="img-responsive">
        @endif
				</figure>
        <span class="fh5co-meta animate-box"><a href="single.html">{{ $noticia->autor}}</a></span>
				<span class="fh5co-meta fh5co-date animate-box">{{ $noticia->fecha}}</span>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-8 cp-r animate-box">
							<p>{{ $noticia->cuerpo}}</p>
						</div>			
				</div>
			</article>
		</div>
	</div>
  @else
    <h1>Lo sentimos, no se encontro la noticia que buscas</h1>
        
  @endif

	<footer id="fh5co-footer">
		<p><small>&copy; 2016. El Chismoso noticias.</p>
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