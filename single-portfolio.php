<?php get_header();?>
		<!-- Portfolio Area -->
		<section>
			<hr class="no-margin" />
			<div class="align-center portfolio-header">
				<a href="<?php echo home_url('portfolio'); ?>" class="btn"> &larr; Back to Portfolio</a>
			</div> <!-- end portfolio header -->
			<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
			<div class="middle-container section-content">
				<div class="container">
					<div class="row">
						<div class="span8">
							<h1><?php the_title(); ?></h1>
							 <?php if ( has_post_thumbnail()) : ?>
   								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   								<figure>
   									<?php the_post_thumbnail('full'); ?>
   									<figcaption>
   									<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
   									</figcaption>
   								</figure>
   								</a>
 							<?php endif; ?>
							<p><?php the_content(); ?></p>

						<?php endwhile; endif;?>
						</div> <!-- end span8 portfolio images -->
						<div class="span4  align-center sidebar">
							<h2>New Landing Page</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, a, sapiente perferendis possimus ducimus ea assumenda voluptatum consequatur nesciunt voluptate nulla temporibus voluptatibus necessitatibus fugit eligendi modi totam. Aspernatur, quaerat.</p>
							<p><a href="">Visit Site &rarr;</a></p>
							<hr class="alt"/>
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, neque earum vitae ex voluptatibus error nostrum dolorum ad. Blanditiis, vel, atque aliquam repellat amet asperiores obcaecati nulla omnis eius officiis!</P>
								<cite>John Doe, ACME Inc. </cite>
							</blockquote>
							<hr class="alt"/>
							<ul class="inline">
								<li><a href="" class="btn">&larr; Previous Project</a></li>
								<li><a href="" class="btn">Next Project &rarr;</a></li>
							</ul>
						</div> <!-- end span4 -->
					</div>
			</div>  <!-- end middle-container -->

		</section>


	<!-- Related Portfolio Entries -->
	<section>
		<div class="container section-content align-center no-padding-bottom">
			<h2>Related Portfolio Projects</h2>
<ul class="row portfolio-entries">
					<li class="span4 box portfolio-entry">
						<div class="hover-state align-right">
							<p>The title of the image</p>
							<em>Click to see project</em>
						</div> <!-- end hover state -->
						<figure>
							<a href="portfolio-single.html"><img src="images/dropbox.png" alt="portfolio entry"></a>
						</figure>
					</li>
					<li class="span4 box portfolio-entry">
						<div class="hover-state align-right">
							<p>The title of the image</p>
							<em>Click to see project</em>
						</div> <!-- end hover state -->
						<figure>
							<a href="portfolio-single.html"><img src="images/restaurant-widget.png" alt="portfolio entry"></a>
						</figure>
					</li>
					<li class="span4 box portfolio-entry">
						<div class="hover-state align-right">
							<p>The title of the image</p>
							<em>Click to see project</em>
						</div> <!-- end hover state -->
						<figure>
							<a href="portfolio-single.html"><img src="images/sidebar-view_1x.png" alt="portfolio entry"></a>
						</figure>
					</li>
				</ul>
		</div> 
	</section>
			</div>  <!-- end middle-container -->
<?php get_footer(); ?>