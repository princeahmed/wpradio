<!doctype html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>
	<?php wp_head(); ?>
	<!--favicon-->
</head>

<body <?php body_class(); ?>>
<!--start preloader-->
<div class="preloader">
	<div class="d-table">
		<div class="d-table-cell align-middle">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
	</div>
</div>
<!--end preloader-->

<!--start header-->
<header id="header">
	<div class="container">
		<nav class="navbar navbar-light navbar-expand-lg justify-content-center">
			<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo"></a>
			<button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#NavbarContent">
				<span class="icofont-navigation-menu"></span>
			</button>
			<div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="NavbarContent">
				<?php if ( is_front_page() || is_home() ): ?>
					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item">
							<a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-scroll-nav="1">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-scroll-nav="2">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-scroll-nav="3">Video Demo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-scroll-nav="4">Documentation</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-scroll-nav="5">Testimonials</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
						</li>
					</ul>
				<?php endif; ?>

				<ul class="nav navbar-nav flex-row justify-content-center flex-nowrap download-btn ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#product-area"><i class="icofont-cart mr-1"></i> Buy Now</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--end header-->

<?php if ( ! is_front_page() ): ?>
<!--start page content area-->
<section id="page-content">
	<!--start page breadcrumb-->
	<div class="page-breadcrum-area">
		<div class="breadcrum-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content text-center">
						<?php

						if ( is_archive('wpradio_docs') ) {
							echo '<h2>WP Radio Documentation</h2>';
						}elseif ( is_archive() ) {
							the_archive_title('<h2>','</h2>');
						} else {
							the_title('<h2>','</h2>');
						}

						?>

						<?php
						if ( function_exists( 'yoast_breadcrumb' ) ) {
							yoast_breadcrumb( '<nav aria-label="breadcrumb">
							<ol class="breadcrumb">', '</ol>
						</nav>' );
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end page breadcrumb-->
	<?php endif; ?>
