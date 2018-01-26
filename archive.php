<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();
$bloghead = get_field("blog-header-image", "option");

if( !empty($bloghead) ): ?>

<div class="featured-hero" alt="<?php echo $bloghead['alt']; ?>" style="background-image:url('<?php echo $bloghead['url']; ?>');">
</div>
<?php else: ?>
	<div class="featured-hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/jeff.png');">
	</div>
<?php endif; ?>
<div class="main-wrap" role="main">
	<article class="main-content">
		<div class="news">

				<?php //Run Loop on Posts Tagged News
				$args = array(
				'post_type'      => 'post',
				'orderby'        => 'date',
				'order'          => 'ASC',
				);
				$posts_array = get_posts( $args ); ?>
				<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
				<div class="columns large-4">
					<a href="<?php the_permalink(); ?>">
					<div class="card">
						<?php //grabbing all content
						$image = get_the_post_thumbnail_url();
						?>
						<?php if( !empty($image) ): ?>
						<div class="post-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" >
						</div>

						<?php else: ?>

						<div class="post-image" style="background-image:url('<?php the_field("blog-fallback-image", "option"); ?>');">
						</div>

						<?php endif; ?>
						<div class="author-bar">
							<?php
								the_date();
								echo " by ";
								the_author();
							?>
						</div>
						<div class="content">
							<h4 class="title"><?php  the_title();?></h4>
							<div class="description"><?php  the_excerpt(); ?></div>
						</div>
					</div>
				</a>
				</div>
			<?php endforeach;
			wp_reset_postdata(); ?>

		</div>
	</article>

</div>

<?php get_footer();
