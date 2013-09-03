<?php get_header();?>
		<!-- Portfolio Area -->
		<section>
			<hr class="no-margin" />
			<div class="align-center portfolio-header">
				<a href="<?php echo home_url('blog'); ?>" class="btn"> &larr; Back to Blog</a>
			</div> <!-- end portfolio header -->
			<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
			<div class="middle-container section-content">
				<div class="container">
					<div class="row">
						<div class="span8">
							<h1><?php the_title(); ?></h1>
							<?php the_post_thumbnail(); ?>
							<p><?php the_content(); ?></p>

						<ul class='box section-content align-center inline blog-single-nav'>
						    <li><?php previous_post_link('%link') ?></li>
						    <li><?php next_post_link('%link') ?></li>
						</ul>

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
	
<?php get_footer(); ?>