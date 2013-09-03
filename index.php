<?php get_header(); ?>
<section>
		<hr class="no-margin" />
		<?php wp_nav_menu(array (
			'theme_location' => 'category-menu',
			'container' => '',
			'menu_class' => 'inline align-center portfolio-header',
			'menu_id' => 'portfolio-sorting'
		)) ?>
		<div class="middle-container section-content">
			<div class="container">
				<?php if(have_posts()) : ?>
				<ul class="row">
					<?php while (have_posts()) : the_post() ; ?>
					<?php 
						$categories = get_the_category(); 

						if($categories) {
							$class_names = array();

							foreach ($categories as $category) {
								$class_names[] = 'cat-'.$category->slug; 
							}
							$classes = join(' ', $class_names);	
						}

					 ?>

					<li class=" box section-content span8 blog-index <php echo $classes;?>">
							<?php the_post_thumbnail(); ?>
							<h2><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h2>
							<p><?php the_excerpt(); ?></p>
							<p><em><?php the_time('l, F jS, Y'); ?></em></p>
					</li>						
					<?php endwhile; else: ?>
				</ul> 
							<div class="middle-container section-content">
								<div class="container">
									<p>Sorry, there are no posts </p>
								</div> <!-- end middle container -->
							</div> <!-- end middle container -->
					<?php endif ?>
				</div> <!-- end container -->
			</div>  <!-- end middle-container -->
		</section>
<?php get_footer(); ?>