<?php
/**
 * Template Name: Home
 *
 * @package Rachelle
 */

get_header(); ?>

<div class="home-page">
	<header class="page-header">
	</header>
	<section class="container work-archive js-anchor">
		<h2>My Work</h2>
		<div class="inner-container page-content">
			<a href="#" class="tile">
				<img src="<?php echo get_template_directory_uri () ?>/assets/img/work-ouai.jpg" class="picture" alt="Rachelle Anderson"/>
				<div class="tile-overlay"></div>
				<div class="over-text">
					<div class="outer-table">
						<div class="inner-table">
							<p>theouai.com</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="tile">
				<img src="<?php echo get_template_directory_uri () ?>/assets/img/work-bluestar.jpg" class="picture" alt="Rachelle Anderson"/>
				<div class="tile-overlay"></div>
				<div class="over-text">
					<div class="outer-table">
						<div class="inner-table">
							<p>bluestarcooking.com</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="tile">
				<img src="<?php echo get_template_directory_uri () ?>/assets/img/work-case.jpg" class="picture" alt="Rachelle Anderson"/>
				<div class="tile-overlay"></div>
				<div class="over-text">
					<div class="outer-table">
						<div class="inner-table">
							<p>case-agency.com</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="tile">
				<img src="<?php echo get_template_directory_uri () ?>/assets/img/work-fightnight.jpg" class="picture" alt="Rachelle Anderson"/>
				<div class="tile-overlay"></div>
				<div class="over-text">
					<div class="outer-table">
						<div class="inner-table">
							<p>fightnight.vision</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="tile">
				<img src="<?php echo get_template_directory_uri () ?>/assets/img/work-bluestar.jpg" class="picture" alt="Rachelle Anderson"/>
				<div class="tile-overlay"></div>
				<div class="over-text">
					<div class="outer-table">
						<div class="inner-table">
							<p>bluestarcooking.com</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="tile">
				<img src="<?php echo get_template_directory_uri () ?>/assets/img/work-case.jpg" class="picture" alt="Rachelle Anderson"/>
				<div class="tile-overlay"></div>
				<div class="over-text">
					<div class="outer-table">
						<div class="inner-table">
							<p>case-agency.com</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="button">More Work</a>
		</div>
	</section>
	<section class="container experience js-anchor" id="resume">
		<div class="heading-wrapper">
			<h2>Experience</h2>
		</div>
		<div class="third">
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/byu.png" alt="BYU"/>
		</div>
		<div class="third">
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/qualtrics.png" class="qualtrics" alt="Qualtrics"/>
		</div>
		<div class="third">
			<img src="<?php echo get_template_directory_uri () ?>/assets/img/voltage.png" alt="Voltage"/>
		</div>
	</section>
</div>

<?php get_footer(); ?>