<?php get_header() ?>

<body>
	<!-- <div class="loader"></div> -->
	<div id="page_">
	<nav class="nav" role="navigation">
			<div class="container">
				<div class="top-logo">
					<div id="logo"><a href="index.html">CamihYohana</a></div>
				</div>
				<div class="top-menu menu-1 text-center">
					<ul>
						<li><a href="work.php">Lo que hago</a></li>
						<li><a href="about.php">Acerca de mi</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contacto</a></li>
					</ul>
				</div>
				<div class="top-social menu-1 text-right">
					<ul class="social">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-instagram"></i></a></li>
						<li><a href="#"><i class="icon-github"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="work">
			<div class="container">
				<div class="row top-line animate-box">
					<div class="col-md-7 col-md-push-5 text-left intro">
						<h2><?php the_title() ?><span class="highlight">Made with <i class="fas fa-heart"></i>
								by <a href="http://freehtml5.co">CamihYohana</a> </span></h2>
					</div>

				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail.php">
							<div class="work-grid" style="background-image:url(assets/images/project-1.jpg);">
								<div class="inner">
									<div class="desc">
										<h3>Arroz integral</h3>
										<span class="cat">Diseño</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail.html">
							<div class="work-grid" style="background-image:url(assets/images/project-2.jpg);">
								<div class="inner">
									<div class="desc">
										<h3>Self Brand</h3>
										<span class="cat">Diseño</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail.html">
							<div class="work-grid" style="background-image:url(assets/images/project-3.jpg);">
								<div class="inner">
									<div class="desc">
										<h3>Curanipe Surf</h3>
										<span class="cat">Diseño Web</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail.html">
							<div class="work-grid" style="background-image:url(assets/images/project-4.jpg);">
								<div class="inner">
									<div class="desc">
										<h3>Hidrofugal</h3>
										<span class="cat">Diseño Web</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail.html">
							<div class="work-grid" style="background-image:url(assets/images/project-5.jpg);">
								<div class="inner">
									<div class="desc">
										<h3>Aline</h3>
										<span class="cat">Fotografía</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail.html">
							<div class="work-grid" style="background-image:url(assets/images/project-6.jpg);">
								<div class="inner">
									<div class="desc">
										<h3>Grismalva</h3>
										<span class="cat">Fotografía</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="author" class="bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center heading">
						<h2>Sobre Mí</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="author">
							<div class="author-inner animate-box" style="background-image: url(assets/images/person3.jpg);">
							</div>
							<div class="desc animate-box">
								<span>Diseñadora Gráfica &amp; Diseñadora UI</span>
								<h3>Camila Yohana Badillo Carroza</h3>
								<p></p>
								<p><a href="about.html" class="btn btn-primary btn-outline">Learn More</a></p>
								<ul class="social-icons">
									<li><a href="mailto:camilayohanabc@gmail.com"><i class="fas fa-envelope"></i></a></li>
									<li><a href="http://www.twitter.com/CamihYohana"><i class="fab fa-twitter"></i></a></li>
									<li><a href="http://www.behance.net/CamihYohana"><i class="fab fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="started">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center heading">
						<h2>Comencemos</h2>
						<p>¿Te interesa comenzar algún trabajo conmigo?</p>
						<p><a href="mailto:camilayohanabc@gmail.com" class="btn btn-primary">Trabaja conmigo</a></p>
					</div>
				</div>
			</div>
		</div>

<?php get_footer() ?>