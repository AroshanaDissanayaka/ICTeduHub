<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Ravindu Bandaranayake | Contact</title>
	<!-- Stylesheets -->
	<?php
	include_once "./components/responsive.component.php";
	include_once "./components/head.component.php";
	?>
</head>

<body>
	<?php
	include_once "./components/preloader.component.php";
	?>
	<div class="page-wrapper">

		<!-- Main Header-->
		<header class="main-header header-style-one">
			<!-- Header Top -->
			<?php
			include_once "./layout/headerTop.layout.php";
			?>
			<!-- Header Upper -->
			<?php
			include_once "./layout/header-upper.layout.php";
			?>
			<!-- End Header Upper -->
			<!-- Mobile Menu  -->
			<?php
			include_once "./layout/mobile-menu.layout.php";
			?>
			<!-- End Mobile Menu -->
		</header>
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title">
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>
			<div class="shooting_star"></div>

			<div id='title'>
				<span>
					Contact Us
				</span>
				<br>

			</div>
			<div class="auto-container">
				<h1></h1>

				<!-- Search Boxed -->
				<?php
				include_once "./layout/index/search-box.layout.php";
				?>

			</div>
		</section>
		<!--End Page Title-->

		<!-- Contact Page Section -->
		<section class="contact-page-section">
			<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
			<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
			<div class="auto-container">
				<div class="inner-container">
					<!-- Sec Title -->
					<div class="sec-title centered">
						<h2>Get in touch</h2>
					</div>

					<!-- Contact Form -->
					<div class="contact-form">

						<!-- Profile Form -->
						<div>
							<div class="row clearfix">

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="username" placeholder="First Name*" required="">
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="lastname" placeholder="Last Name*" required="">
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="email" name="email" placeholder="Email Address*" required="">
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="phone" placeholder="Phone Number*" required="">
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea class="" name="message" placeholder="Send Message"></textarea>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
									<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Message <i class="fa fa-angle-right"></i></span></button>
								</div>

							</div>
						</div>

					</div>

				</div>

				<!-- Contact Info Section -->
				<div class="contact-info-section">
					<div class="title-box">
						<h2>Contact Information</h2>
						<div class="text">Lorem Ipsum is simply dummy text of the printing <br> and typesetting
							industry.</div>
					</div>

					<div class="row clearfix">

						<!-- Info Column -->
						<div class="info-column col-lg-4 col-md-6 col-sm-12">
							<div class="info-inner">
								<div class="icon fa fa-phone"></div>
								<strong>Phone</strong>
								<ul>
									<li><a href="tel:071 523 8348">0711902842</a></li>
									<li><a href="https://api.whatsapp.com/send?phone=%2B94715238348&data=ARBYFAzTyekinqhWvpOUDx-oM470P-a_HuI0ZTeCJmLrvwzZluoA1zBz_74MF823jFE7yRvJ4DBaRBxT1mg_aUJRasxaxc0jWT1fxd949bTM1gweip9K7jfYFbEuyArOI5KxdTWYO42vo_A36QxIY6gdPg&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR1z9oeRuqPm71SWhDZWKPij9ZANlXmScKpsKlKWZeMOfRS_plxb4EAmnsY">Whatsapp</a></li>
								</ul>
							</div>
						</div>

						<!-- Info Column -->
						<div class="info-column col-lg-4 col-md-6 col-sm-12">
							<div class="info-inner">
								<div class="icon fa fa-envelope-o"></div>
								<strong>Email</strong>
								<ul>
									<li><a href="mailto:n3neel@gmail.com">raviduthegreat@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<!-- Info Column -->
						<div class="info-column col-lg-4 col-md-6 col-sm-12">
							<div class="info-inner">
								<div class="icon fa fa-map-marker"></div>
								<strong>Address</strong>
								<ul>
									<li>31/4  Colombo Road Kurunegala</li>
								</ul>
							</div>
						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- End Contact Page Section -->

		<!-- Map Section -->
		<section class="map-section">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/place/Kurunegala/@7.4098104,80.2654837,12z/data=!4m6!3m5!1s0x3ae3398ab06be8b9:0x1f90e4e71e885052!8m2!3d7.4817695!4d80.3608876!16zL20vMDdsM3Q1?entry=ttu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>
		<!-- End Map Section -->
		<?php
		include_once "./layout/getting-started.layout.php";
		?>
		<!-- End Call To Action Section Two -->

		<!--Main Footer-->
		<?php
		include_once "./layout/footer-layout.php";
		?>


	</div>
	<!--End pagewrapper-->

	<?php
	include_once "./components/body.component.php";
	?>

</body>

</html>