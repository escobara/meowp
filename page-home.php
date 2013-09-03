<?php 
	/* Template Name: Home Page */
 ?>

<?php get_header(); ?>

<section>
			<div class="middle-container section-content">
				<div class="container">
					<ul class="row">
						<li class="span4 box">
							<div class="intro-content align-center img-responsive">
								<h1 class='special-intro'>I'm Rene</h1>
							</div>
						</li>						
						<li class="span4 box">
							<div class="intro-content align-center img-responsive">
								<h1 class='intro-color-1'>I create super awesome stuff</h1>
							</div>
						</li>
						<li class="span4 box">
							<div class="intro-content align-center img-responsive ">
								<h1 class='intro-color-2'>I'm available for freelancing</h1>
							</div>
						</li>
					</ul>
				<?php  ?>
				<ul class="row portfolio-entries">
					<?php 
						
						query_posts('post_type=portfolio&show_posts=3' );
						if (have_posts()) : while (have_posts()) : the_post() ;?>
							<li class="span4 box portfolio-entry img-responsive">
						<div class="hover-state align-right">
							<p><?php the_title() ?></p>
							<em>Click to see project</em>
						</div> <!-- end hover state -->
						<figure>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</figure>
					</li>
					<?php endwhile; else: endif; wp_reset_query()?>
				</ul>

				<div class="cta align-center">
					<a href="portfolio.html" class="btn btn-primary">See My Full Porfolio</a>
				</div> <!-- end cta -->
				</div> <!-- end container -->
			</div>  <!-- end middle-container -->
		</section>
<?php get_footer(); ?>