<?php
/**
 * Template Name: Home Page Template
 */
get_header(); ?>

<script>

	$(function() {

		$('.section1 .scroll').click(function() {
            $('html, body').animate({
                scrollTop: $('.section2').offset().top
            }, 1000);
		    return false;
		});

	});

</script>

<main>

	<div class="section1">
	    <?php $image = get_field('section_1_background'); if($image) { ?>
			<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
		<?php } ?>
		<div class="wrapper clearfix">
			<div class="text-upper"><?php echo get_field('section_1_upper_text'); ?></div>
			<h1 class="text-header"><span><?php echo get_field('section_1_header_text'); ?></span></h1>
			<h2 class="text-subheader"><span><?php echo get_field('section_1_subheader_text'); ?></span></h2>
	        <?php $link = get_field('section_1_button_link'); if($link) { ?>
				<a class="button-link" href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a>
			<?php } ?>
			<a class="scroll" href="#"><img class="block" src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.png"></a>
		</div>
	</div>

	<div class="section1b">
		<div class="updates">
			<div class="copy">
				<div class="header">
					Recent Updates
				</div>
				<div class="subheader">
					We are here to keep you informed about our progress.
				</div>
				<div class="text">
					<?php echo get_field('updates_copy'); ?>
				</div>
				<a class="button-link" href="/odor-control/">Latest Updates</a>
			</div>
		</div>
		<div class="alerts">
			<div class="copy">
				<div class="header">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-alerts.png" aria-hidden>Community Alerts
				</div>
				<div class="subheader">
					<?php echo get_field('alerts_copy'); ?>
				</div>
				<a href="/odor-control/">VIEW ALERTS ></a>
			</div>
		</div>
	</div>

	<div class="section2">
		<div class="wrapper clearfix">
			<div class="content-left clearfix">
				<div class="content-wysiwyg clearfix"><?php echo get_field('section_2_content'); ?></div>
		        <?php $link = get_field('section_2_button_link'); if($link) { ?>
					<a class="button-link" href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a>
				<?php } ?>
			</div>
			<div class="content-right clearfix">
	            <div class="content-slider" data-autoslide="8">
			        <?php if( have_rows('section_2_slider') ) { $i = 0; ?>
			        	<div class="content-slides clearfix">
			                <?php while ( have_rows('section_2_slider') ) { the_row(); ?>
			                    <div class="content-slide clearfix" data-index="<?php echo $i; ?>">
								    <?php $image = get_sub_field('image'); if($image) { ?>
										<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
									<?php } ?>
			                    	<div class="content-caption"><?php echo get_sub_field('caption'); ?></div>
			                    </div>
			                <?php $i++; } ?>
		                </div>
			        <?php } ?>
			        <?php if($i > 1) { ?>
	                    <ul class="content-slides-buttons clearfix">
					        <?php if( have_rows('section_2_slider') ) { $i = 0; ?>
				                <?php while ( have_rows('section_2_slider') ) { the_row(); ?>
				                	<li data-index="<?php echo $i; ?>" tabindex="0">&nbsp;</li>
				                <?php $i++; } ?>
					        <?php } ?>
	                    </ul>
			    	<?php } ?>
			    	<a class="slider-prev" href="#"></a>
			    	<a class="slider-next" href="#"></a>
	            </div>
			</div>
		</div>
	</div>

	<div class="section3">
	    <?php $image = get_field('section_3_background'); if($image) { ?>
			<div class="background-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
		<?php } ?>
		<div class="wrapper clearfix">
			<div class="content-left clearfix">
				<div class="content-wysiwyg clearfix"><?php echo get_field('section_3_content'); ?></div>
		        <?php $link = get_field('section_3_button_link'); if($link) { ?>
					<a class="button-link" href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="section4">
		<div class="wrapper clearfix">
			<div class="content-header clearfix">
				<div class="content-image">
				    <?php $image = get_field('section_4_header_icon'); if($image) { ?>
						<img class="block" src="<?php echo $image['url']; ?>">
					<?php } ?>
				</div>
				<h2 class="content-text"><?php echo get_field('section_4_header_text'); ?></h2>
			</div>
			<div class="content-columns clearfix">
				<div class="content-left clearfix">
					<div class="content-image">
					    <?php $image = get_field('section_4_column_1_icon'); if($image) { ?>
							<img class="block" src="<?php echo $image['url']; ?>">
						<?php } ?>
					</div>
					<div class="content-title"><?php echo get_field('section_4_column_1_title'); ?></div>
					<div class="content-wysiwyg clearfix"><?php echo get_field('section_4_column_1_content'); ?></div>
				</div>
				<div class="content-right clearfix">
					<div class="content-image">
					    <?php $image = get_field('section_4_column_2_icon'); if($image) { ?>
							<img class="block" src="<?php echo $image['url']; ?>">
						<?php } ?>
					</div>
					<div class="content-title"><?php echo get_field('section_4_column_2_title'); ?></div>
					<div class="content-wysiwyg clearfix"><?php echo get_field('section_4_column_2_content'); ?></div>
				</div>
			</div>
			<div class="content-lower clearfix">
				<div class="content-left clearfix"><?php echo get_field('section_4_signup_text'); ?></div>
				<div class="content-right clearfix">
					<div class="form-newsletter-new clearfix">
						<?php echo do_shortcode('[ninja_form id=3]'); ?>
						<style>
							.form-newsletter-new {
								position: relative;
							}
							.form-newsletter-new .submit-container,
							.form-newsletter-new .recaptcha-container {
								margin-bottom: 0;
							}
							.form-newsletter-new .nf-field-label,
							.form-newsletter-new .nf-form-title {
								display: none;
							}
							.form-newsletter-new .nf-field-element,
							.form-newsletter-new .nf-field-container {
								position: unset;
							}
							.form-newsletter-new input[type="email"] {
								display: block;
								width: 100%;
								height: 60px !important;
								padding: 18px;
								border: 0;
								box-sizing: border-box;
								font-size: 20px;
								line-height: 24px;
								font-style: italic;
								font-weight: 300;
								color: #535353;
								background-color: white;
								border-radius: 0;
								-webkit-appearance: none;
								box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
							}
							.form-newsletter-new input[type="button"] {
								display: block;
								position: absolute;
								top: 0;
								right: 0;
								height: 60px !important;
								font-size: 14px;
								line-height: 1.25;
								font-weight: 700;
								color: white;
								text-align: center;
								text-transform: uppercase;
								text-decoration: none;
								border: 0;
								padding: 0 1em;
								background-color: #000;
								opacity: 1;
								transition: opacity 0.2s ease-in-out;
								border-radius: 0;
								-webkit-appearance: none;
							}
						</style>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section5">
		<div class="wrapper clearfix">
			<div class="content-left clearfix">
				<div class="content-wysiwyg clearfix"><?php echo get_field('section_5_content'); ?></div>
                <?php if( have_rows('section_5_button_links') ) { ?>
                    <?php while ( have_rows('section_5_button_links') ) { the_row(); ?>
				        <?php $link = get_sub_field('button_link'); if($link) { ?>
							<a class="button-link" href="<?php echo $link['url']; ?>" <?php if($link['target']) { ?> target="<?php echo $link['target']; ?>" <?php } ?>><?php echo $link['title']; ?></a>
						<?php } ?>
                    <?php } ?>
                <?php } ?>
			</div>
			<div class="content-right clearfix">
				<div class="content-header"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-news.png"><?php echo get_field('section_5_news_header'); ?></div>
				<?php
					$articles = get_posts( array(
						'posts_per_page'   => 3,
						'offset'           => 0,
						'orderby'          => 'date',
						'order'            => 'DESC',
						'post_type'        => 'post',
						'post_status'      => 'publish',
						'suppress_filters' => true
					) );
				?>
				<div class="news-entries clearfix">
					<?php for($i = 0; $i < 3; $i++) { ?>
						<?php $article = $articles[$i]; ?>
						<?php if($article) { ?>
							<?php $title = get_the_title($article->ID); ?>
							<div class="news-entry"><?php echo $title; ?>&hellip; <a href="<?php echo get_the_permalink($article->ID); ?>">READ MORE</a></div>
						<?php } else { ?>
							<div class="news-entry">&nbsp;</div>
						<?php } ?>
					<?php } ?>
				</div>
				<div class="content-footer"><a href="<?php echo get_the_permalink(164); ?>"><?php echo get_field('section_5_news_link_text'); ?></a></div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
