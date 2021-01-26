<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="row">
							<div class="license col-md-6 offset-md-3">
								<h3 class="label-centered">License</h3>
								"A Guide to Children's Literature" by Lisa Cipolletti, Valerie Robnolt, and Elizabeth Morris is licensed under a <a href="https://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-Non-Commerical 4.0 License</a>, except where otherwise noted.
								<?php 
								echo child_lit_extra_license();
								?>
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

