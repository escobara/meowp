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
				'taxonomy' => 'project_type',
			);?>

			<ul class="inline align-center portfolio-header" id="portfolio-sorting">
				<?php wp_list_categories($args);?>

			</ul>
		
		<div class="middle-container section-content ">
			<div class="container">
				<ul class='row'>
					<?php query_posts('post_type=portfolio' );
						while (have_posts()) : the_post() ;?>
					<li class="span4 box portfolio-entry">
							<div class="hover-state align-right ">
								<p><?php the_title() ?></p>
								<em>Click to see project</em>
							</div> <!-- end hover state -->
							<figure>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</figure>
						</li>
						<?php endwhile;?>
					</ul>
<?php get_footer(); ?>