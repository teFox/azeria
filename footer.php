<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package azeria
 */

?>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
				<?php 
					foreach ( array( 'footer-sidebar-1', 'footer-sidebar-2', 'footer-sidebar-3' ) as $footer_sidebar ) {
						
						if ( ! is_active_sidebar( $footer_sidebar ) ) {
							continue;
						}
						?>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<?php dynamic_sidebar( $footer_sidebar ); ?>
						</div>
						<?php
					}
				?>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
			<?php
				$azeria_custm_copyright = azeria_get_option( 'footer_copyright' );
				if ( $azeria_custm_copyright ) {
					echo $azeria_custm_copyright;
				} else {
			?>
				<a rel="nofollow" href="<?php echo esc_url( __( 'http://wordpress.org/', 'azeria' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'azeria' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'azeria' ), 'Azeria', '<a href="http://www.tefox.net/" rel="nofollow">Tefox</a>' ); ?>
			<?php } ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>