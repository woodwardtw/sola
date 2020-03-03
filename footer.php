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
					
					<div class="row footer-widgets">
						<div class="col-md-12">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Whole Footer") ) : ?>
							<?php endif;?>

						</div>

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

