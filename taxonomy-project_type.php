<?php  
	/* Template Name: Portfolio Taxonomy */
?>

<?php get_header(); ?>

		<!-- Portfolio Area -->
		<section>
			<hr class="no-margin" />
			<?php  

			$args = array(
				'show_option_all' => 'All',
				'order_by' => 'count',
				'use_desc_for_title' => 'false',
				'title_li' => '', 
				'show count' => 1,
				'taxonomy' => 'project_type',
			);?>

			<ul class="inline align-center portfolio-header" id="portfolio-sorting">
				<?php wp_list_categories($args);?>
			</ul>
		
		<div class="middle-container section-content">
			<div class="container">
				<ul class='row'>



					<li class="span4 box portfolio-entry ">
							<div class="hover-state align-right ">
								
								<p>The title of the image</p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="portfolio-single.html"><img src="images/dropbox.png" alt="portfolio entry"></a>
							</figure>
						</li>
					</ul>
<?php get_footer(); ?>