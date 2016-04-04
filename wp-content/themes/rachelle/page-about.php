<?php
/**
 * Template Name: About
 *
 * @package Rachelle
 */

get_header(); ?>

<div class="about">
	<header class="page-header">
		<h1>About</h1>
	</header>
	<div class="inner-container page-content">
		<section>
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/rachelle.png" class="picture" alt="Rachelle Anderson"/>
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/hello.png" class="hello" alt="Hello"/>
			<p>My name is Rachelle Anderson. I was raised most of my life near Boulder, Colorado and now live in the Denver area. My husband and I have been married for 3 years and he is currently attending medical school at the University of Colorado. I graduated from Brigham Young University in 2013 with a degree in Mathematics. I love finding creative solutions to difficult problems! I’ve also always enjoyed art so I love that front end development allows me to problem solve while making things look pretty!</p>
			<p>My husband and I love to travel! Together, we’ve been to Costa Rica, Holland, England, France, Italy, and Mexico. AND WE ARE HUGE BRONCOS FANS! I love peanut butter, chocolate, and Chic-fil-a!</p>
		</section>
		<section class="about-slider">
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/about1.jpg" alt="Wedding"/>
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/about1.jpg" alt="Wedding"/>
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/about1.jpg" alt="Wedding"/>
		</section>
	</div>
</div>

<?php get_footer(); ?>