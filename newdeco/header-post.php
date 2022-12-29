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
			<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="Logo" ></a>
		</div>
			
			<div class="header-info">
				<div class="header-mail">
					<?php the_field('e-mail',12) ?>
				</div>
				<div class="header-phone">
					<a href="https://api.whatsapp.com/send?phone=79372752389" ><?php the_field('phone',12) ?><img src="<?php echo get_template_directory_uri() . '/assets/images/viber.svg'; ?>" alt="viber" class="viber"></a>
				</div>
			</div>
		</div>
		
	</div>	
</header>