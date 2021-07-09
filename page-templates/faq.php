<?php
/**
 * Template Name: FAQ Page Template
 */
get_header(); ?>

<script>

	$(function() {
		$('.callout-updates-alerts .update .readmore a').click(function(e){
			e.preventDefault();
			$(this).parent().parent().toggleClass('active');
			var copy = $(this).parent().parent().find('.morecopy');
			copy.toggle();
			if (copy.is(":visible")) {
				$(this).text('READ LESS');
			} else {
				$(this).text('READ MORE');
			}
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

	<?php if ($_SERVER['REMOTE_ADDR'] == '98.31.5.60' || $_SERVER['REMOTE_ADDR'] == '98.102.228.114') { ?>
	<div class="callout-updates-alerts">
		<div class="container">
			<div class="main">

				<div class="header">
					Recent Updates
				</div>
				<div class="update blue">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>

				<div class="header">
					Past Updates
				</div>
				<div class="update">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>
				<div class="update">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>
				<div class="update hidden">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>
				<div class="update hidden">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>
				<div class="update hidden">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>
				<div class="update hidden">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>
				<div class="update hidden">
					<div class="date">
						MARCH 28, 2019
					</div>
					<div class="title">
						Sunny Farms Land Purchase Part of Strategic Effort to Minimize Potential Emissions
					</div>
					<div class="copy">
						FOSTORIA, March 28, 2019 – Sunny Farms Landfill today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="morecopy">
						Today announced the purchase of 180 acres of land adjacent to its current facility for the purpose of future soil use and creating buffer areas at the landfill.
					</div>
					<div class="readmore">
						<a href="#">READ MORE</a>
					</div>
				</div>

				<div class="viewmore">
					<a href="#">
						View More
					</a>
				</div>

			</div>
			<div class="aside">

				<div class="header">
					Current community alerts
				</div>
				<div class="alert">
					<div class="topper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-alerts.png" aria-hidden>
						<div class="title">
							There are no current community alerts.
						</div>
					</div>
				</div>

				<div class="header">
					Past alerts
				</div>
				<div class="alert">
					<div class="topper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-alerts.png" aria-hidden>
						<div class="date">
							MARCH 25, 2019
						</div>
						<div class="title">
							Lorem ipsum dolor sit amet.
						</div>
					</div>
					<div class="readmore">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-grey.png" aria-label="Show alert details">
						</a>
					</div>
					<div class="copy">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
					</div>
				</div>
				<div class="alert">
					<div class="topper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-alerts.png" aria-hidden>
						<div class="date">
							MARCH 12, 2019
						</div>
						<div class="title">
							Lorem ipsum dolor sit amet.
						</div>
					</div>
					<div class="readmore">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-grey.png" aria-label="Show alert details">
						</a>
					</div>
					<div class="copy">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php } ?>

	<div class="section1">
		<div class="wrapper clearfix">
			<div class="content-sections clearfix">
		        <?php if( have_rows('faq_sections') ) { ?>
	                <?php while ( have_rows('faq_sections') ) { the_row(); ?>
						<div class="content-section clearfix">
							<h2 class="content-header"><?php echo get_sub_field('section_header'); ?></h2>
							<div class="content-accordions clearfix">
						        <?php if( have_rows('questions') ) { ?>
					                <?php while ( have_rows('questions') ) { the_row(); ?>
										<div class="content-accordion clearfix">
											<a href="#" class="content-accordion-title"><span class="vert-align-middle"><span><?php echo get_sub_field('question'); ?></span></span></a>
											<div class="content-accordion-content content-wysiwyg clearfix"><?php echo get_sub_field('answer'); ?></div>
										</div>
					                <?php } ?>
						        <?php } ?>
							</div>
						</div>
	                <?php } ?>
		        <?php } ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
