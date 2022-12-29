<?php
/*
Template Name: Главная
Template Post Type: page
*/

get_header();
?>

<main id="primary" class="site-main">
	<div class="description">
		<div class="desc__item">
			<div class="desc__head"><h3><?php the_field('first-title')?></h3></div>
			<div class="desc__content"><h4><?php the_field('first-desc')?></h4></div>
		</div>
		<div class="desc__item">
			<div class="desc__head"><h3><?php the_field('second-title')?></h3></div>
			<div class="desc__content"><h4><?php the_field('second-desc')?></h4></div>
		</div>
		<div class="desc__item">
			<div class="desc__head"><h3><?php the_field('third-title')?></h3></div>
			<div class="desc__content"><h4><?php the_field('third-desc')?></h4></div>
		</div>
	</div>
	<div class="info wrapper">
		<h2><?php the_field('title-curtains')?></h2>
		<img src="<?php echo get_template_directory_uri() . '/assets/images/info-line.png'; ?>" loading="lazy" class="info__image-bg">
		<div class="info__wrap">
			<div class="info__curtains" id="curtains">
				<details open>
					<summary><div class="info__title">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/arr.svg'; ?>" loading="lazy" class="arrow">
						<h3>Шторы</h3>
					</div></summary>
					
					<div class="curtains__content show">
						
						<?php 
						$args = array(
							'category_name' => 'шторы', 
							'orderby' => 'date ',
							'order' => 'ASC',
						);
						$query = new WP_Query($args);
						while ( $query->have_posts() ) {
						$query->the_post();
						?><div class="info__item"><?php the_content();?>  <h4><?php the_title(); ?></h4> </div>
						<?php
						wp_reset_postdata();
						}
						?>				
					</div>
				</details>
			</div>
			<div class="info__cornices" id="cornices">
				<details >
					<summary><div class="info__title">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/arr.svg'; ?>" loading="lazy" class="arrow">
						<h3>Карнизы</h3>
					</div></summary>
					
					<div class="curtains__content show">
						
						<?php 
						$args = array(
							'category_name' => 'карнизы', 
							'orderby' => 'date ',
							'order' => 'ASC',
						);
						$query = new WP_Query($args);
						while ( $query->have_posts() ) {
						$query->the_post();
						?><div class="info__item"><?php the_content();?>  <h4><?php the_title(); ?></h4> </div>
						<?php
						wp_reset_postdata();
						}
						?>				
					</div>
				</details>
			</div>
			<div class="info__other" id="other">
				<details >
					<summary><div class="info__title">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/arr.svg'; ?>" loading="lazy" class="arrow">
						<h3>Покрывала, подушки и прочий декор</h3>
					</div></summary>
					
					<div class="curtains__content show">
						
						<?php 
						$args = array(
							'category_name' => 'другое', 
							'orderby' => 'date ',
							'order' => 'ASC',
						);
						$query = new WP_Query($args);
						while ( $query->have_posts() ) {
						$query->the_post();
						?><div class="info__item"><?php the_content();?>  <h4><?php the_title(); ?></h4> </div>
						<?php
						}
						?>				
					</div>
				</details>
			</div>		
		</div>		
	</div>
	<div class="about wrapper" id="about">
		<div class="we-in-insta">
			<div class="galery-header">
			<h2 class="h2">Мы в instagram</h2>
			</div>
			<div class="about-images">
			    <?php get_template_part('insta'); ?>
            </div>
			
		</div>
		<div class="about-content">
			<div class="about__header">
			<h2 class="h2">О нас</h2>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/about-line.png'; ?>" loading="lazy" class="about__image-bg">
			</div>
			<div class="about-description">
				Особое внимание в нашей работе мы уделяем непрерывному изучению рынка шторной и швейной фурнитуры, что позволяет нам оперативно реагировать на изменения в тенденциях моды. </br></br>
				Мы заинтересованы в благополучии наших клиентов, в укреплении между нами доверия, так как основным принципом нашей работы является построение долгосрочных и взаимовыгодных отношений.</br></br>
				За время нашей работы мы зарекомендовали себя как надежный партнер и уже успели завоевать признание наших клиентов благодаря мастерству и опыту наших сотрудников, постоянно обновляемому ассортименту, качественному и внимательному подходу к выполнению любого заказа клиента.</br></br>
				Гибкость, мобильность, надежность, максимум внимания – вот за что нас ценят наши клиенты!
			</div>
		</div><!-- #about -->
		
	</div><!-- #about -->
	<?php get_template_part('galery'); 
	?>
	<div class="contacts wrapper" id="contacts">					
		<div id="map" style="width: 768px;height: 497px;"></div>
		<div class="contacts__content">
			<h2 class="h2">Контакты</h2>
			<span>8 937 275-23-89</span></br>
			<span>8-9378-18-50-78</span></br></br>
			<span>ежедневно с 10 до 19</span></br></br>
			<span>Ульяновск</span></br>
			<span>ТЦ «Плаза» (Новый город)</span></br>
			<span>пр-т Ленинского Комсомола 34</span>
		</div>
			
	</div>	
</main><!-- #main -->
<?php
get_footer();