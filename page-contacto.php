<?php get_header() ?>
<body>

<div class="loader"></div>

<div id="page">
	<nav class="nav" role="navigation">
		<div class="container">
			<div class="top-logo">
				<div id="logo"><a href="index.html">Shift</a></div>
			</div>
			<div class="top-menu menu-1 text-center">
				<ul>
					<li><a href="work.html">Work</a></li>
					<li><a href="about.html">Profile</a></li>
					<li class="has-dropdown">
						<a href="#">Dropdown</a>
						<ul class="dropdown">
							<li><a href="#">Web Design</a></li>
							<li><a href="#">eCommerce</a></li>
							<li><a href="#">Branding</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</li>
					<li class="active"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="top-social menu-1 text-right">
				<ul class="social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
					<li><a href="#"><i class="icon-github"></i></a></li>
				</ul>
			</div>

		</div>
	</nav>

	<div id="contact">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left heading">
					<h2>Say Hello</h2>
					<h3>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
						texts. Separated they live in Bookmarksgrove</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-5 col-md-pull-1 animate-box">
						<div class="contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
								<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
								<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
								<li class="url"><a href="http://freehtml5.co">FreeHTML5.co</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 animate-box">
						<h3>Get In Touch</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="fname">Your Name</label>
									<input type="text" id="fname" class="form-control">
								</div>

							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center heading">
					<h2>Get Started</h2>
					<p>We create beautiful themes for your site behind the word mountains, far from the countries Vokalia and
						Consonantia, there live the blind texts.</p>
					<p><a href="#" class="btn btn-primary">Let's work together</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a
							 href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="http://blog.gessato.com/" target="_blank">Gessato</a></small>
					</p>

					<ul class="social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>

				</div>
			</div>

		</div>
	</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>

<?php get_footer() ?>