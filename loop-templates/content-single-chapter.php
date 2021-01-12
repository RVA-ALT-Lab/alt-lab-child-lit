<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>
		<?php echo child_lit_intro();?>
		<?php echo child_lit_main();?>
		<div class="row">
			<div class="col-md-4 questions">
				<?php echo child_lit_evaluation_questions();?>
			</div>
			<div class="col-md-4">
				<?php echo child_lit_benefits();?>
			</div>
			<div class="book-list col-md-4">
				<?php echo child_lit_book_list();?>
			</div>
		</div>
		<div class="row">
			<div class="references col-md-6">
				<?php echo child_lit_additions();?>
			</div>	
			<div class="references col-md-6">
				<?php echo child_lit_references();?>
			</div>	
		</div>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
