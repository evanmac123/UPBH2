<?php
/*
Template Name: Home
*/
get_header(); ?>
	<div class="home">
		<section>
			<div class="home__slider hide-for-small-only">
				<?php the_field("main-slider"); ?>
			</div>
        <div class="home__slider show-for-small-only row">
            <div class="ms-slide-bgcont" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-back.png');">
						</div>
            <h2 class="home-slider-heading-mobile columns small-12">New Perspectives</h2>
            <h3 class="home__slider-description-mobile columns small-12" style="text-align: left;">Moving beyond the barriers in Treatment Preparation and Coordination Planning to create better outcomes for our patients.</h3>
          	<a class="columns small-12" href="/university-park/"><button>Getting Started</button></a>
        </div>
		</section>
 		<div class="waves-background">
		<section class="home__about">
			<div class="dark divider row">
				about
			</div>
			<div class="row">
				<div class="column large-2">
					<div class="home__about-image-holder">
						<div class="home__about-image" style="background-image:url('<?php the_field("about-img"); ?>');">
						</div>
				</div>
				</div>
				<div class="column large-8 end">
					<h2 class="home__about-headline ">
						<?php the_field("about-headline"); ?>
					</h2>
					<div class="home__about-paragraph ">
						<?php the_field("about-paragraph"); ?>
					</div>
					<div class=" home__about-button">
					<a href="<?php the_field("about-link"); ?>" class="home__about-cta large-12 large-centered">
						<button> <?php the_field("about-button-text"); ?></button>
					</a>
					</div>
				</div>
			</div>
		</section>

		<section class="home__program">
			<div class="dark divider row">
				programs
			</div>
			<div class="row">
				<h2 class="large-centered columns large-8"><?php the_field("program-headline"); ?></h2>
			</div>
			<div class="row">
				<div class="large-centered columns large-8"><?php the_field("program-paragraph"); ?></div>
			</div>
			<div class="row expanded large-collapsed home__program-link-split">
				<a href="<?php  the_field("program-left-link");?>">
				<div class="home__program-block large-6 column" style="background-image:url('<?php  the_field("program-left-background");?>')">
					<img class="home__program-icon" src="<?php the_field("program-left-icon");?>">
					<div class=home__program-title>
						<?php  the_field("program-left-title");?>
					</div>
					<div class="home__program-link">
							learn more
					</div>
				</div>
				</a>
				<a href="<?php  the_field("program-right-link");?>">
				<div class="home__program-block large-6 column" style="background-image:url('<?php  the_field("program-right-background");?>')">
					<img class="home__program-icon" src="<?php the_field("program-right-icon");?>">
					<div class="home__program-title">
						<?php  the_field("program-right-title");?>
					</div>
					<div class="home__program-link">
							learn more
					</div>
				</div>
				</a>
			</div>
		</section>
	</div>

		<section class="home__location">
			<div class="dark divider row">
				locations
			</div>
			<div class="row">

		<?php while( have_rows('locations-repeater') ): the_row();
			// vars
				$image = get_sub_field('card-img');
				$location = get_sub_field('card-location');
				$link = get_sub_field('location-link');
				$description = get_sub_field('card-description');
				$title = get_sub_field('card-title');
			?>
			<?php if( $link ): ?>
				<a class="home__location-item medium-4 columns" href="<?php echo $link; ?>">
					<div class="home__location-card">
						<div class="image" style='background-image:url("<?php echo $image ?>")';>
						</div>
						<div class="content">
							<div class="location"><?php echo $location; ?></div>
						  <div class="title"><?php echo $title; ?></div>
							<div class="description"><?php echo $description; ?></div>
							<div class="link">
								learn more
							</div>
						</div>
					</div>
				</a>
			<?php endif; ?>
		<?php endwhile; ?>
			</div>
		</section>

		<section class="home__insurance">
			<div class="column large-8 small-centered">
				<div class="dark divider row">
					insurance
				</div>
				<div class="row">
					<h2 class="home__insurance-title"> <?php the_field("insurance-title"); ?> </h2>
				</div>
				<div class="row">
					<div class="home__insurance-description">
						<?php the_field("insurance-paragraph"); ?>
					</div>
				</div>
				<div class="row">
					<a href="<?php the_field("home-insurance-link"); ?>" class="home__insurance-button large-centered">
						<button>
							verify insurance
						</button>
					</a>
				</div>
			</div>

				<div class="row provider-gallery expanded hide-for-small">
					<div class="columns large-12">
						<div class="row">
					<?php
						$images = get_field('provider-gallery');
						if( $images ): ?>
						<?php foreach( $images as $image ): ?>
						<div class="columns medium-2">
							<span class="helper"></span>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>


		<section class="home__leadership">
			<div class="divider row">
				leadership
			</div>
			<?php the_field("leadership-slider"); ?>
		</section>



		<section class="home__blog">
			<div class="row">
				<div class="news large-4 column">
					<?php //Run Loop on Posts Tagged News
					$args = array(
					'post_type'      => 'post',
					'orderby'        => 'date',
					'order'          => 'ASC',
					'posts_per_page' =>  1,
					'category'			 => '4'
					);
					$posts_array = get_posts( $args ); ?>
					<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
					<a href="the_permalink();">
						<div class="card">
							<?php //grabbing all content
							$image = get_the_post_thumbnail_url();
							?>
							<?php if( !empty($image) ): ?>
							<div class="post-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')" />
							<?php else: ?>
								<div class="post-image" style="background-image:url('<?php the_field("blog-fallback-image", "option"); ?>');">
							<?php endif; ?>
							</div>
							<div class="author-bar">
								<?php
									the_date();
									echo " by ";
									the_author();
			 					?>
							</div>
							<div class="content">
								<h3 class="title"><?php  the_title();?></h3>
								<div class="description"><?php  the_excerpt(); ?></div>
							</div>
						</div>
						</a>
				<?php endforeach;
		 		wp_reset_postdata(); ?>
			</div>

			<div class="large-8 column university-park">
				<div class="row">
					<div class="column large-10 small-centered">
						<div class="row">
							<div class="dark divider">
								from the blog
							</div>
							<?php //Run Loop on Posts Tagged News
								$args = array(
								'post_type'      => 'post',
								'orderby'        => 'date',
								'order'          => 'ASC',
								'posts_per_page' =>  1,
								'category'			 => '5'
								);
								$posts_array_news = get_posts( $args ); ?>
							<?php foreach ( $posts_array_news as $post ) : setup_postdata( $post ); ?>
								<div class="columns large-12">
									<h4>
										<?php the_title(); ?>
									</h4>
									<div class="date">
										<?php
										echo get_the_date();
										 ?>
									</div>
									<div class="description">
										<?php  the_content(); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="large-centered">
										<button>
											learn more
										</button>
									</a>
								</div>
						 	<?php endforeach;
						 		wp_reset_postdata(); ?>
						</div>
				 		<div class="recognized-by row">
						 <img class="columns large-12" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recognized.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	</div>
	<?php get_footer();
