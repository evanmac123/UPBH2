<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
			<?php the_content(); ?>
			<?php
				while ( have_rows("flexible_content") ) : the_row();
				if( get_row_layout() == 'standard_row_full_width' ): ?>
				<section class="grid-container">
				<div class="row">
					<div class='medium-12 columns'><?php the_sub_field('full_width'); ?>
					</div>
				</div>
			</section>
		<?php elseif( get_row_layout() == 'row_2_cell' ): ?>
				<section class="grid-container">
				<div class="row">
					<div class='medium-6 columns'><?php the_sub_field('left_column_2'); ?></div>
					<div class='medium-6 columns'><?php the_sub_field('right_column_2'); ?></div>
				</div>
			</section>

				<?php elseif( get_row_layout() == 'full-bleed' ): ?>
				<section> <?php the_sub_field('full-bleed-content'); ?>
				</section>
					<?php
				elseif( get_row_layout() == 'row_3_cell' ):?>
				<section class="grid-container">
					<div class="row">
						<div class='medium-4 columns'><?php the_sub_field('left_column_3'); ?></div>
						<div class='medium-4 columns'><?php the_sub_field('center_column_3'); ?></div>
						<div class='medium-4 columns'><?php the_sub_field('right_column_3'); ?></div>
					</div>
				</section><?php
				elseif( get_row_layout() == 'row_4_cell' ): ?>
				<section class="grid-container">
				<div class="row">
					<div class='medium-3 columns'><?php the_sub_field('left_column_4'); ?></div>
					<div class='medium-3 columns'><?php the_sub_field('center_left_column_4'); ?></div>
					<div class='medium-3 columns'><?php the_sub_field('center_right_column_4'); ?></div>
					<div class='medium-3 columns'><?php the_sub_field('right_column_4'); ?></div>
				</div>
			</section>

				<?php
				elseif( get_row_layout() == 'gray-block' ): ?>
				<section class="gray-block">
					<div class="grid-container full">
					<div class='medium-12 columns'><?php the_sub_field('gray-block-content'); ?></div>
				</div>
			</section>
				<?php
				elseif( get_row_layout() == 'full-img' ): ?>
				<section class="full-img">
					<img src="<?php the_sub_field('full-img-background'); ?>">
			</section>
			<?php
			elseif( get_row_layout() == 'orange-block-quote' ): ?>
			<section class="grid-container">
			<h3 class="orange-quote">
				<?php the_sub_field('orange-block-quote-content');?>
		</h3>
	</section>
		<?php endif;?>
	<?php endwhile;?>
		</div>


	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
