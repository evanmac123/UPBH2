<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<header class="gray-header ">
	<h2 class=" grid-container entry-title"><?php the_title(); ?></h2>
</header>
<div class="full-width">

<?php do_action( "foundationpress_before_content" ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">

		<?php do_action( "foundationpress_page_before_entry_content" ); ?>
			<div class="entry-content  grid-container ">
			<?php
				while ( have_rows("flexible_content") ) : the_row();
				if( get_row_layout() == 'standard_row_full_width' ): ?>
				<div class="grid-x grid-margin-x">
					<div class='large-12 cell'><?php the_sub_field('full_width'); ?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'row_2_columns' ): ?>
				<div class="grid-x grid-margin-x">
					<div class='large-6 cell'><?php the_sub_field('left_column_2'); ?></div>
					<div class='large-6 cell'><?php the_sub_field('right_column_2'); ?></div>
				</div>
				<?php
				elseif( get_row_layout() == 'row_3_columns' ):?>
					<div class="grid-x grid-margin-x">
						<div class='large-4 cell'><?php the_sub_field('left_column_3'); ?></div>
						<div class='large-4 cell'><?php the_sub_field('center_column_3'); ?></div>
						<div class='large-4 cell'><?php the_sub_field('right_column_3'); ?></div>
					</div><?php
				elseif( get_row_layout() == 'row_4_columns' ): ?>
				<div class="grid-x grid-margin-x">
					<div class='large-3 cell'><?php the_sub_field('left_column_4'); ?></div>
					<div class='large-3 cell'><?php the_sub_field('center_left_column_4'); ?></div>
					<div class='large-3 cell'><?php the_sub_field('center_right_column_4'); ?></div>
					<div class='large-3 cell'><?php the_sub_field('right_column_4'); ?></div>
				</div>
				<?php endif;
endwhile;?>
		<footer>
			<?php
				wp_link_pages(
					array(
						"before" => "<nav id='page-nav'><p>" . __( "Pages:", "foundationpress" ),
						"after"  => "</p></nav>",
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( "foundationpress_page_before_comments" ); ?>
		<?php comments_template(); ?>
		<?php do_action( "foundationpress_page_after_comments" ); ?>
	</article>
<?php endwhile;?>

<?php do_action( "foundationpress_after_content" ); ?>

</div>
<section>
		<nav>
				<div class="grid-x grid-margin-x">
					<?php foundationpress_bottom_nav(); ?>
				</div>
		</nav>
</section>
<?php get_footer();
