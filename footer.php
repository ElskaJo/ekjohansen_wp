
	<footer id="footer">
	<div class="footer__split-box">
	<?php dynamic_sidebar( 'footer_widget_left' ); ?>

	&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	</div>

	<div class="footer__split-box">
	<?php dynamic_sidebar( 'footer_widget_right' ); ?>
	</div>

	</footer>
	<?php wp_footer(); ?>
	</body>
</html>