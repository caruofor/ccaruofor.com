<footer class="site-footer">
	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>


			<?php 

			$args = array(
				'theme_location' => 'footer'
				);



		?>

	<nav class = "site-nav">
		<?php wp_nav_menu($args); ?>
	</nav>
</footer>

</div><!-- container -->

<php wp_footer(); ?>
</body>
</html>
