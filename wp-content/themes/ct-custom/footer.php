<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>

	</div><!-- #content -->
<div class="container mt-5">
<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://muhammad-ali-sardar.business.site/', 'ct-custom' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ct-custom' ), 'Muhammad Ali Sardar' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ct-custom' ), 'mas-custom', '<a href="https://muhammad-ali-sardar.netlify.app/">MAS Technologies</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->	
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
