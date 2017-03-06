<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fab_blog
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">

		<nav class="site-nav">
		<?php 

		$args = array(
				'theme_location' => 'footer'
			);

		?>

		<?php wp_nav_menu( $args); ?>
		</nav>

		<p><?php bloginfor('name'); ?> - &copy; <?php echo date('Y');?></p>

	</footer>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores-sass' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underscores-sass' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores-sass' ), 'underscores-sass', '<a href="https://automattic.com/" rel="designer">omphalus kua</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
