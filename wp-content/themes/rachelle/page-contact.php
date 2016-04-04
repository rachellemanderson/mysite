<?php
/**
 * Template Name: Contact
 *
 * @package Rachelle
 */

get_header(); ?>

<div class="contact">
	<header class="page-header">
		<h1>Contact</h1>
	</header>
	<section class="page-content">
		<div class="inner-container contact-form">
			<form id="ajax-contact" method="post" action="mailer.php">
			  <input type="text" name="firstname" placeholder="First Name" required>
			  <input type="text" name="lastname" placeholder="Last Name" required>
			  <input type="email" name="lastname" placeholder="Email" required>
			  <textarea placeholder="Message"></textarea>
			  <input type="submit" class="button" value="Submit">
			</form>
		</div>
	</section>
</div>

<?php get_footer(); ?>