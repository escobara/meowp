<?php 

	/* Template Name: Contact Page */
 ?>

 <?php get_header(); ?>


	<!-- CONTENT Area -->
<section>
		<div class="middle-container section-content">
			<div class="container box section-content align-center contact-page">
					<h2>Let's Get in Touch</h2>
					<p>You can call me, email me directly, or connect with me through the social networks</p>
					<p>(301) 905- 6809 <br> <a href="">rene@reneescobar.me</a></p>

					<ul class="social-icons inline">
						<li><a href="" class="icon-twitter"></a></li>
						<li><a href="" class="icon-linkedin"></a></li>
						<li><a href="" class="icon-facebook"></a></li>
						<li><a href="" class="icon-github"></a></li>
					</ul>
					<hr class="alt">

					<h2>Need a Quote?</h2>
					<p class="narrow-p">Please use the form below. All fields are required.</p>

					<form action="<?php the_permalink(); ?>" method="post" class="quote-form" novalidate>
						<p>
							<label for="quote-name">Full Name: </label>
							<input type="text" name="quote-name" id='quote-name'>
						</p>
						<p>
							<label for="quote-email" name="quote-email" id='quote-email'>Email Address:</label>
							<input type="email">
						</p>
						<p>
							<label for="quote-phone" name="quote-phone" id='quote-phone'>Phone Number: </label>
							<input type="text">
						</p>
						<p class='select-container'>
							<label for="quote-project-type">Project Type: </label>
							<select name="quote-project-type" id="quote-project-type">
								<option value="0">- Select Project Type -</option>
								<option value="1">Web Design</option>
								<option value="2">Wordpress Theming</option>
								<option value="3">Web Application</option>
							</select>
						</p>
						<p>
							<label for="quote-project-description">Project Description:</label>
							<textarea name="quote-project-description" id="quote-project-description" cols="30" rows="10"></textarea>
						</p>
						<p>
							<label for="quote-budget">Budget:</label>
							<input type="number" name="quote-budget" id="quote-budget" min="50" step="50" class="align-right" />
						</p>
						<div class="cta">
							<input type="submit" class="btn btn-primary" value="Give me a Quote">
						</div>	<!-- end cta -->					
					</form>
			</div>	<!-- end container -->
		</div>	<!-- end middle-container -->		
	




 <?php get_footer('contact'); ?>