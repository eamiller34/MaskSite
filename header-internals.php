<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link rel='dns-prefetch' href='//fonts.googleapis.com' />

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel='stylesheet' id='openSansFont-css'  href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,800' type='text/css' media='all' />
		<link rel='stylesheet' id='permanentMarkerFont-css'  href='http://fonts.googleapis.com/css?family=Permanent+Marker&#038;ver=4.7.3' type='text/css' media='all' />
		<script src="https://use.fontawesome.com/70889c11f6.js"></script>
		<?php wp_head(); ?>

		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header <?php echo $headerclass ?>" role="banner">
				
				<nav class="menu slide-left" role="navigation">
					<button class="close-menu"><i class="fa fa-remove" aria-hidden="true"></i></button>
					<?php if (function_exists(boilerplate_nav())) boilerplate_nav(); ?>

					<div class="button-group">
						<div class="social-buttons">
							<a href="https://twitter.com/MASKchicago_" target="_new">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="https://www.facebook.com/Mothers-Against-Senseless-Killings-541764962534514/" target="_new">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							
						</div>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="MAATLYNZTRT5S">
						<a class="button secondary-dark-bg" href="/contact">Contact Us</a>
						<button class="button primary-dark-bg">Donate</button>
						</form>
					</div>
				</nav>
				<div class="mask"></div>
				<div class="stuck"></div>
				<div class="content">
					<!-- logo -->
					<div class="span-12 col">
						<button class="open-menu">&#9776;</button>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/dist/img/logo-header.png'" class="logo"></a>
					<div class="button-group sticky">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="GR8X4RWSM4ET2">
						
						<ul class="unstyled">
							<li><a class="button secondary-dark-bg" href="contact">Contact Us</a></li>
							<li><button class="button primary-dark-bg">Donate</button></li>							
						</ul>
					</form>
					</div>
				</div>
				</div>
			</header>
			<!-- /header -->
