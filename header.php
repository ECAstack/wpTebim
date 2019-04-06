<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:700%7CKarla:400,400i,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.min.css">

		<link rel="shortcut icon" href="#">
		<link rel="apple-touch-icon" href="#">
		<link rel="apple-touch-icon" sizes="72x72" href="#">
		<link rel="apple-touch-icon" sizes="114x114" href="#">

		<?php wp_head(); ?>
	</head>

	<body>

			<header class="header header-sticky header-overlay">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-4 col-xs-8">
								<h1 class="site-logo">
									<a href="http://localhost:8888/wordpressTebim/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg" alt=""></a>
								</h1>
							</div>

							<div class="col-lg-8 col-xs-4">
								<nav class="nav">
									<ul class="navigation-main">
										<li class="current-menu-item">
											<a href="index.php">Home</a>
										</li>
										<li class="">
											<a href="single.php">Rooms</a>
										</li>
										<li class="">
											<a href="page.html">page</a>
										</li>
										<li><a href="about.html">About Us</a></li>
										<li class="">
											<a href="http://localhost:8888/wordpressTebim/archive.php">Archive</a>
										</li>
										<li class="">
											<a href="#">Extras</a>

										</li>
										<li class="nav-btn">
											<a href=" #">Booking</a>
										</li>
									</ul><!-- #navigation -->
								</nav><!-- #nav -->

								<div id="mobilemenu"></div>

								<a href="#mobilemenu" class="mobile-nav-trigger">
									<i class="fa fa-navicon"></i> Menu
								</a>
							</div>
						</div>
					</div>
				</header>




