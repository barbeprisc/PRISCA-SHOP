<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hill_Sine
 */
global $hill_global;
?>
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="hill-container">
			<div class="hill_widget_footer">
				<div class="widget_section hill_footer1">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
				<div class="widget_section hill_footer2">
					<?php dynamic_sidebar('footer-2');  ?>
				</div>
				<div class="widget_section hill_footer3">
					<?php dynamic_sidebar('footer-3');  ?>
				</div>
				<div class="widget_section hill_footer4">
					<?php dynamic_sidebar('footer-4');  ?>
				</div>
			</div>
			<div class="site-info">
				<?php 
				if(get_theme_mod('hill_footer_customize',$hill_global['hill_footer_customize'])==true){
					printf( esc_html__( '%1$s', 'hill-shop' ),get_theme_mod('hill_copyright_text',$hill_global['hill_copyright_text']) );
				}else{
				?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hill-shop' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'hill-shop' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'hill-shop' ), 'hill-shop', '<a href="https://www.codesmade.com/">gravitymaster97</a>' );
					?>
				<?php
				}
				?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
