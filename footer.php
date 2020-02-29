<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
					<h2>Svara på en enkät</h2>
					<p>På denna sidan tillhandahåller vi flera olika enkäter som administreras via <a href="https://wordpress.org/" target="_blank" rel="noopener">WordPress</a> och enkätverktyget <a href="https://www.gravityforms.com/" target="_blank" rel="noopener">GravityForms</a> som är <a href="https://hhk3.kau.se" target="_blank" rel="noopener">tillgänglig för all personal och studenter</a>. All data sparas på servrar hos Karlstads universitet. Vid frågor <a href="https://www.kau.se/om-universitetet/om-karlstads-universitet/vart-ansvar/kompetensutveckling" target="_blank" rel="noopener">kontakta den universitetspedagogiska enheten</a>.</p>
					<div class="row">
						<div class="col-md-4">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Footer") ) : ?>
							<?php endif;?>

						</div>
						<div class="col-md-4">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mid Footer") ) : ?>
							<?php endif;?>

						</div>
						<div class="col-md-4">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Footer") ) : ?>
							<?php endif;?>

						</div>
					</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

