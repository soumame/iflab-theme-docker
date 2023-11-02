<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Iflab
 * @subpackage Iflab
 * @since 1.0.0
 */

?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="bg-sky-300 p-6 rounded-2xl w-full shadow-lg mt-10 static bottom-0 left-0">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php endif; ?>

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<div class="footer">
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
						<?php
						wp_nav_menu([
						'menu'            => 'footer',
						'theme_location'  => 'top',
						'container'       => 'ul',
						'container_id'    => 'bs4navbar',
						'container_class' => 'collapse navbar-collapse',
						'menu_id'         => false,
						'menu_class'      => 'block flex flex-row mx-2 text-black font-bold text-xl text-gray-700 gap-4',
						'depth'           => 2,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'  => new custom_walker_nav_menu
						]);
						?>
					</nav><!-- .footer-navigation -->
					</div>
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<style>
.menu {
 padding : 10;
}

.footer li:hover {
 color : #9ca3af;
 transition: all 0.3s; 
}
</style>