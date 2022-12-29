<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<div class="head header-wrapper">
		<div class="header-top">
		<div class="logo">
			<a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" loading="lazy" alt="Logo" ></a>
		</div>
			
			<div class="header-info">
				<div class="header-mail">
					<?php the_field('e-mail') ?>
				</div>
				<div class="header-phone">
					<a href="https://api.whatsapp.com/send?phone=79372752389" ><?php the_field('phone') ?><img src="<?php echo get_template_directory_uri() . '/assets/images/viber.svg'; ?>" loading="lazy" alt="viber" class="viber"></a>
				</div>
			</div>
			<div class="header-menu-toggle">
                <span></span>
				<span></span>
				<span></span>
				<span></span>               
            </div>
			
		</div>
		
	</div>	
	<?php 
		wp_nav_menu( [
				'theme_location'  => 'header_menu',
				'container'       => 'nav', 
				'container_class' => 'header-nav', 
				'menu_class'      => 'header-menu', 
				'echo'            => true,
			] );?>
	<div class="header-bottom wrapper">
		<div class="header-content">
			<h1><?php the_field('title') ?></h1>
			<span><?php the_field('subtitle') ?></span>
			<a href="https://api.whatsapp.com/send?phone=79372752389" ><button class="button button__header">Написать в  WhatsApp</button></a>
		</div>
		<img src="<?php echo get_template_directory_uri() . '/assets/images/main.jpg'; ?>" loading="lazy" alt="main" class="main-img">
	</div>
	
</header>