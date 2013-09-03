<?php 

	/* Template Name: About Page */
 ?>

 <?php get_header(); ?>


<!-- CONTENT Area -->
	<section>
		<div class="middle-container section-content">
			<div class="container box section-content align-center about">
					<h2>About Me</h2>
					<p class='narrow-p'>I am a web developer from Silver Spring, Maryland. I work with PHP, HTML, CSS, and even some Ruby. </p>
					<p class='narrow-p'>Wanna get in touch? Take a quick scoll to the bottom for more information. <a href="">It’s all there.</a></p>
					<hr class="alt">
					<h2 class='available'>I'm currently available for freelance projects</h2>
					<h2>My going rate is $50 per hour</h2>
					<div class="cta">
						<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>"class="btn btn-primary">See My Portfolio</a>
					</div> <!-- end container CTA -->
			</div>	<!-- end container -->
		</div>	<!-- end middle-container -->		
	




 <?php get_footer(); ?>