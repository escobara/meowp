<?php  
/* Template Name: Portfolio Page */ 
?>

<?php get_header(); ?>
		<!-- Portfolio Area -->
		<section>
			<hr class="no-margin" />
			<ul class="inline align-center portfolio-header" id="portfolio-sorting">
				<li><a href="" class="btn active">All</a></li>
				<li><a href="" class="btn">Wordpress</a></li>
				<li><a href="" class="btn">PHP</a></li>
				<li><a href="" class="btn">Web Design</a></li>
			</ul>
			<div class="middle-container section-content">
				<div class="container">

					<ul class="row portfolio-entries">
						<li class="span4 box portfolio-entry cat-webdesign ">
							<div class="hover-state align-right">
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/dropbox.png" alt="portfolio entry"></a>
							</figure>
						</li>
						<li class="span4 box portfolio-entry cat-php">
							<div class="hover-state align-right">
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/restaurant-widget.png" alt="portfolio entry"></a>
							</figure>
						</li>
						<li class="span4 box portfolio-entry cat-wordpress">
							<div class="hover-state align-right">
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/sidebar-view_1x.png" alt="portfolio entry"></a>
							</figure>
						</li>
						<li class="span4 box portfolio-entry cat-php">
							<div class="hover-state align-right">
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/dropbox.png" alt="portfolio entry"></a>
							</figure>
						</li>
						<li class="span4 box portfolio-entry cat-webdesign">
							<div class="hover-state align-right">
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/restaurant-widget.png" alt="portfolio entry"></a>
							</figure>
						</li>
						<li class="span4 box portfolio-entry cat-wordpress">
							<div class="hover-state align-right">
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/sidebar-view_1x.png" alt="portfolio entry"></a>
							</figure>
						</li>
					</ul>

				<div class="box align-center portfolio-nav">
					<ul class="inline">
						<li><a href="" class="btn">&larr; Previous Page</a></li>
						<li><a href="" class="btn">Next Page &rarr;</a></li>
					</ul>
				</div> <!-- end cta -->
				</div> <!-- end container -->
			</div>  <!-- end middle-container -->
		</section>


<?php get_footer(); ?>