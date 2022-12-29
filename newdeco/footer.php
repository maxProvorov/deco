	<footer class="footer">
		<div class="footer-wrap wrapper">
			<div class = "footer-mail">
				<span >E-m@il:liniyadeco@mail.ru</span>
			</div>
			<?php 
				wp_nav_menu( [
					'theme_location'  => 'footer_menu',
					'container'       => 'nav', 
					'container_class' => 'footer-nav', 
					'menu_class'      => 'footer-menu', 
					'echo'            => true,
				] );?>
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-bright.png'; ?>" alt="Logo-bright">
			</div>
		</div>
	</footer>
	<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full" ></script>
<?php wp_footer(); ?>
</body>
</html>
