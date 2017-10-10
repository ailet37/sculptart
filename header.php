<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/favicon.ico" type="image/x-icon">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style.css">
	<script src="<?php bloginfo("template_directory");?>/js/jquery.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCacI9eBtbw4m3Vgcpiu6cE2ueBL3_huog"></script>
	
</head>

<body>
<div class="wrapper">
	<header class="header">
		<div class="container clearfix">
			<a href="/" title="Школа скульптурного мастерства Sculpt art" class="header_logo">
				<?php echo file_get_contents(get_template_directory_uri() . '/svg/logo.svg' ); ?>
			<span>школа скульптурного мастерства</span>
		</a>

		<div class="header_mobile js-menuOpen a-under-tablet">
			<?php echo file_get_contents(get_template_directory_uri() . '/svg/menu.svg' ); ?>
		</div>

	<div class="header_menu">
		<?php wp_nav_menu( array(
			'menu' => '',
			'container' => false,
			)); ?>
				<div class="social_icons a-under-tablet m-red">
					<?php $instagram = ot_get_option('instagram'); 
					if (!empty($instagram)) { ?>
					<a target="_blank" href="<?php echo $instagram; ?>">
						<?php echo file_get_contents(get_template_directory_uri() . '/svg/inst.svg' ); ?>
					</a>
				<?php 	}  ?>
				<?php $vk = ot_get_option('vk'); 
				if (!empty($vk)) { ?>
				<a target="_blank" href="<?php echo $vk; ?>">
					<?php echo file_get_contents(get_template_directory_uri() . '/svg/vk.svg' ); ?>
				</a>

			<?php 	}  ?>
			<?php $facebook = ot_get_option('facebook'); 
			if (!empty($facebook)) { ?>

			<a target="_blank" href="<?php echo $facebook; ?>">
				<?php echo file_get_contents(get_template_directory_uri() . '/svg/facebook.svg' ); ?>
			</a>
		<?php 	}  ?>
	</div>

	<span class="header_mobile m-close js-menuClose a-under-tablet">
		<?php echo file_get_contents(get_template_directory_uri() . '/svg/close.svg' ); ?>
	</span>

	</div>
</div>
</header>
