<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>
		<meta content="width=device-width, initial-scale=1" name="viewport"/>

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/hamburger.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?v=1.0.0" type="text/css" />
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
		
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon"/>
		<link href="webclip.png" rel="apple-touch-icon"/>
		<?php wp_head(); ?>
	</head>
	<body class="body">
		<header>
			<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>" class="logo"><img src="<?php bloginfo('template_url') ?>/assets/img/header_logo.svg" alt=""></a>
			<div class="navbar desktop-only">
				<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">Főoldal</a>
				<a href="<?php echo esc_url( get_page_link( 25 ) ); ?>">Technológia</a>
				<a href="<?php echo esc_url( get_page_link( 27 ) ); ?>">Tudástár</a>
				<a href="<?php echo esc_url( get_page_link( 21 ) ); ?>">Rólunk</a>
				<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">GY.I.K.</a>
				<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">Kapcsolat</a>
			</div>
			<div class="buttons desktop-only">
				<a href="" class="btn btn-transparent">
					<div class="btn-text img-left">
						<img src="<?php bloginfo('template_url') ?>/assets/img/ruler.svg" alt="">
						Műszaki adatok
					</div>
				</a>
				<a href="#" class="btn btn-green">
					<div class="btn-text img-left">
						<img src="<?php bloginfo('template_url') ?>/assets/img/headset.svg" alt="">
						Beszéljünk</div>
				</a>
			</div>
			<button class="hamburger hamburger--squeeze mobile-only" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</header>
		<div class="mobile-navbar">
			<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">Főoldal</a>
			<a href="<?php echo esc_url( get_page_link( 25 ) ); ?>">Technológia</a>
			<a href="<?php echo esc_url( get_page_link( 27 ) ); ?>">Tudástár</a>
			<a href="<?php echo esc_url( get_page_link( 21 ) ); ?>">Rólunk</a>
			<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">GY.I.K.</a>
			<a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">Kapcsolat</a>
			<div class="buttons">
				<a href="" class="btn btn-transparent">
					<div class="btn-text img-left">
						<img src="<?php bloginfo('template_url') ?>/assets/img/ruler.svg" alt="">
						Műszaki adatok
					</div>
				</a>
				<a href="#" class="btn btn-green">
					<div class="btn-text img-left">
						<img src="<?php bloginfo('template_url') ?>/assets/img/headset.svg" alt="">
						Beszéljünk</div>
				</a>
			</div>
		</div>
		<main>
		<!-- HEADER -->