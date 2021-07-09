<?php
/**
 * Template Name: Odor Control Page Template
 */
get_header(); ?>

<script>

	$(function() {
		$('.callout-updates-alerts .update .read a').click(function(e){
			e.preventDefault();
			$(this).parent().parent().toggleClass('active');
			$(this).parent().parent().find('.morecopy').toggle();
		});
		$('.callout-updates-alerts .alert .readmore a').click(function(e){
			e.preventDefault();
			$(this).parent().parent().toggleClass('active');
		});
		$('.callout-updates-alerts .viewmore a').click(function(e){
			e.preventDefault();

			// Show next 3 hidden updates
			var nexttoshow = $('.update.hidden').nextAll().andSelf().slice(0,3);
			nexttoshow.removeClass('hidden');

			// Hide view more if no more exist to show
			if (!$('.callout-updates-alerts .update.hidden').length) {
				$(this).remove();
			}
		});
	});

</script>

<main>

	<div class="section-header">
        <?php $image = get_field('header_background'); if($image) { ?>
			<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
		<?php } ?>
		<div class="wrapper clearfix">
			<div class="vert-align-middle"><div>
				<h1><?php echo get_field('header_text'); ?></h1>
			</div></div>
		</div>
	</div>

	<div class="callout-updates-alerts">
		<div class="container">
			<div class="main">

				<?php
				$updateCount = 0;
				if( have_rows('updates') ) {
					while ( have_rows('updates') ) {
						the_row();
						$updateCount++;

						// First item is recent update
						if ($updateCount == 1) { ?>
							<div class="header">
								Recent Updates
							</div>
						<?php }

						// Second item and below are past updates
						if ($updateCount == 2) { ?>
							<div class="header">
								Past Updates
							</div>
						<?php }

						// Print updates ?>
						<div class="update<?php if ($updateCount == 1) echo ' blue'; ?><?php if ($updateCount > 3) echo ' hidden'; ?>">
							<div class="date">
								<?php echo get_sub_field('date'); ?>
							</div>
							<div class="title">
								<?php echo get_sub_field('title'); ?>
							</div>
							<div class="copy">
								<?php echo get_sub_field('copy'); ?>
							</div>
							<div class="morecopy">
								<?php echo get_sub_field('more_copy'); ?>
							</div>
							<div class="read">
								<a href="#" class="readmore">
									READ MORE
								</a>
								<a href="#" class="readless">
									READ LESS
								</a>
							</div>
						</div>
						<?php
					}
				}

				// Show view more?
				if ($updateCount > 3) { ?>
					<div class="viewmore">
						<a href="#">
							View More
						</a>
					</div>
				<?php } ?>

			</div>
			<div class="aside">

				<?php
				$alertCount = 0;
				if( have_rows('alerts') ) {
					while ( have_rows('alerts') ) {
						the_row();
						$alertCount++;

						// First item is recent update
						if ($alertCount == 1) { ?>
							<div class="header">
								Current community alerts
							</div>
						<?php }

						// Second item and below are past updates
						if ($alertCount == 2) { ?>
							<div class="header">
								Past alerts
							</div>
						<?php }

						// Print alerts ?>
						<div class="alert">
							<div class="topper">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon-alerts.png" aria-hidden>
								<?php if (get_sub_field('date')) { ?>
									<div class="date">
										<?php echo get_sub_field('date'); ?>
									</div>
								<?php } ?>
								<div class="title">
									<?php echo get_sub_field('title'); ?>
								</div>
							</div>
							<?php if (get_sub_field('copy')) { ?>
								<div class="readmore">
									<a href="#">
										<img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-grey.png" aria-label="Show alert details">
									</a>
								</div>
								<div class="copy">
									<?php echo get_sub_field('copy'); ?>
								</div>
							<?php } ?>
						</div>
						<?php
					}
				}
				?>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
