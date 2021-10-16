<?php
/**
 * Template Name: Disposal Request Page Template
 */
get_header(); ?>

<main>

	<section class="callout-disposal-request-form">
		<div class="mwrapper">
			<h1 class="mheader">
				<?php echo get_field('header'); ?>
			</h1>
			<div class="mcopy">
				<?php echo get_field('copy'); ?>
			</div>
			<div class="mform">
				<?php echo do_shortcode(get_field('form_shortcode')); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
