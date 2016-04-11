<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galifao
 */

?>

</div><!-- #content -->
<div class="push"></div>

</div ><!--wrapper-->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'galifao' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'galifao' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'galifao' ), 'galifao', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

 
</body>
</html>
