<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

	<meta charset="utf-8">

	<title><?php wp_title( );?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

  <?php wp_head(); ?>

</head>

<body>

	<header>
		<div class="container">
			<div class="col-6">
				<div class="top-menu">
					<a href="<?php echo home_url('/'); ?>" class="logo">
						<img src="<?php echo get_template_directory_uri();?>/img/Erlau_Logo.svg" alt="Logo">
					</a>
					<buttom class="navbar-toggler">
						<i class="la la-bars"></i>
					</buttom>
          <?php
            $args = array(
              'menu_id'=>'',
              'container'       => false,
              'menu'              => 'top_menu',
              'theme_location'    => 'top_menu',
              'container' => false,
              'depth' => 0,
              'menu_class'        => 'sub-menu'
            );
            wp_nav_menu($args);
          ?>
				</div>
			</div>
			<div class="col-3 mob-hidden">
				<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) );?>" class="top-contact">CONTACT US</a>
			</div>
			<div class="col-3 mob-hidden">
				<div class="top-info">
					<p>Street furniture enquiries</p>
					<span>01227 276 611</span>
				</div>
			</div>
		</div>
	</header>
