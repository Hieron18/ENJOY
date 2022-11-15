<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	 <head>
	<title>Главная</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
	<!-- <link rel="stylesheet" href="css/style.min.css?_v=20220609141735">
	<link rel="shortcut icon" href="favicon.ico"> -->
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
</head>
	<body class="body">
		<div class="wrapper">
<header class="header">
	<div class="header__container _container">
		<div class="header__left">
			<a href="/" class="header__logo">
				<h4>enjoy <span>boost</span></h4>
			</a>
		</div>

		<div class="header__center">
			<div class="header__menu">
				<ul>
					<li class="header__link _open"><a href="pvp-boost">PVP Boosting</a></li>
					<li class="header__link"><a href="pveboost">PVE Boosting</a></li>
					<li class="header__link"><a href="news">news</a></li>
					<li class="header__link"><a href="#">guides</a></li>
				</ul>
			</div>
		</div>

		<div class="header__right">
			<div class="header__block">
				<div class="header__fun">
					<a href="" class="header__lup">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/vector.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/vector.png?_v=1654773455737" alt=""></picture>
					</a>
					<a href="profile" class="header__user">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/user.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/user.png?_v=1654773455737" alt=""></picture>
					</a>
					<a href="cart" class="header__cart">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/cart.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/cart.png?_v=1654773455737" alt=""></picture>
					</a>
				</div>
				<div class="header__language">
					<p>eng</p>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
               <div class="header__tongue">
                  <div class="header__item">
                     <a href="#">eng</a>
                  </div>
                  <div class="header__item">
                     <a href="#">ru</a>
                  </div>
                  <div class="header__item">
                     <a href="#">ukr</a>
                  </div>
               </div>
				</div>
				<div class="header__burger">
					<span></span>
				</div>
			</div>
		</div>
	</div>
</header>