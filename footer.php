<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<div class="foot-contact">
	<div class="foot-callout">
		<h4>Have questions? Want to know what we can do for you?</h4>
	</div>
	<div class="foot-callout-button">
		<a class="button">Contact Us</a>
	</div>
</div>
<footer class="footer-container">

	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<p class="copyright"><?php echo "© "; echo date("Y"); echo " "; echo bloginfo('name'); ?></p>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
